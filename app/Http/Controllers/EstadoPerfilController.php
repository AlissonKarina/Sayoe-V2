<?php

namespace App\Http\Controllers;

use App\Model\Usuario;
use Illuminate\Http\Request;
use App\Model\EstadoPerfil;
use App\Model\PerfilPsicologico;
use App\Http\Helper\Helper;
use App\Http\Resources\PerfilPsicologicoEstadoResource;
use App\Http\Resources\EstadoPerfilResource;
use Illuminate\Support\Facades\DB;


class EstadoPerfilController extends Controller
{
    public function evaluacionesPendientes(Request $request)
    {
      return $this->evaluaciones($request, 0);
    }

    public function evaluacionesRealizadas(Request $request)
    {
      return $this->evaluaciones($request, 1);
    }

    protected function evaluaciones(Request $request, $estado)
    {
      $arrayTotal = ["data" => []];
      
      $semestre = Helper::semestre($request->mes);



      /* $perfiles = PerfilPsicologico::with('estadosPerfil')
            ->where('codigo_alumno','=', $request->codigo)
            ->where('anho','=', $request->anho)
            ->where('semestre','=', $semestre)
            ->get();
                        */
      $perfiles = DB::table('perfiles_psicologicos')
            ->join('estado_perfiles', 'perfiles_psicologicos.id_perfil', '=', 'estado_perfiles.id_perfil_psico')
            ->join('cuestionario_evaluaciones', 'cuestionario_evaluaciones.id','=','estado_perfiles.id_cuest_eval')
            ->where('perfiles_psicologicos.codigo_alumno','=', $request->codigo)
            ->where('perfiles_psicologicos.anho','=', $request->anho)
            ->where('perfiles_psicologicos.semestre','=', $semestre)
            ->where('estado_perfiles.estado','=',$estado)
            ->select('perfiles_psicologicos.id_perfil','perfiles_psicologicos.fecha_limite',
              'perfiles_psicologicos.semestre', 'perfiles_psicologicos.anho',
              'estado_perfiles.id', 'cuestionario_evaluaciones.titulo_secundario',
              'cuestionario_evaluaciones.nro_preguntas')
            ->get();
            
            /* foreach ($perfiles as $perfil){
              $array = [
                "id_perfil_psico" => $perfil->id_perfil,
                "anho" => $perfil->anho,
                "semestre" => $perfil->semestre,
                "fecha_vencimiento" => $perfil->fecha_limite,
                "evaluaciones" => EstadoPerfilResource::collection($evaluaciones),
              ];
              array_push($arrayTotal['data'],$array);
          } */ 

    /*   foreach ($perfiles as $perfil){
          $evaluaciones = EstadoPerfil::where('id_perfil_psico','=',$perfil->id_perfil)
            ->where('estado','=',$estado)
            ->get();
          $array = [
            "id_perfil_psico" => $perfil->id_perfil,
            "anho" => $perfil->anho,
            "semestre" => $perfil->semestre,
            "fecha_vencimiento" => $perfil->fecha_limite,
            "evaluaciones" => EstadoPerfilResource::collection($evaluaciones),
          ];
          array_push($arrayTotal['data'],$array);
      } */

      /* return response()->json($arrayTotal); */
      return response()->json($perfiles);
    }

    public function obtenerResultado(Request $request)
    {
      
    }
}
