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
      $arrayTotal = array();
      $semestre = Helper::semestre($request->mes);
      $perfiles = PerfilPsicologico::with('estadosPerfil')
                ->where('codigo_alumno','=', $request->codigo)
                ->where('anho','=', $request->anho)
                ->where('semestre','=', $semestre)
                ->get();
                       
      foreach ($perfiles as $perfil){
          $evaluaciones = EstadoPerfil::where('id_perfil_psico','=',$perfil->id_perfil)
                          ->where('estado','=','0')
                          ->get();

          $array = [
            "id_perfil_psico" => $perfil->id_perfil,
            "anho" => $perfil->anho,
            "semestre" => $perfil->semestre,
            "fecha_vencimiento" => $perfil->fecha_limite,
            "evaluaciones" => EstadoPerfilResource::collection($evaluaciones),
          ];
          array_push($arrayTotal,$array);
      }
      /* $perfiles = PerfilPsicologico::with('estadosPerfil')
                ->join('estado_perfiles', 'perfiles_psicologicos.id_perfil', '=', 'estado_perfiles.id_perfil_psico')
                ->where('perfiles_psicologicos.codigo_alumno','=', $request->codigo)
                ->where('perfiles_psicologicos.anho','=', $request->anho)
                ->where('perfiles_psicologicos.semestre','=', $semestre)
                ->where('estado_perfiles.estado','=', '0')
                ->get(); */
      
      return PerfilPsicologicoEstadoResource::collection($perfiles);
     /* return response()->json($arrayTotal); */
    }

    public function evaluacionesRealizadas(Request $request)
    {
      $semestre = Helper::semestre($request->mes);
      $perfiles = PerfilPsicologico::with('estadosPerfil')
                ->join('estado_perfiles', 'estado_perfiles.id_perfil_psico', '=', 'perfiles_psicologicos.id')
                ->where('perfiles_psicologicos.codigo_alumno','=', $request->codigo)
                ->where('perfiles_psicologicos.anho','=', $request->anho)
                ->where('perfiles_psicologicos.semestre','=', $semestre)
                ->where('estado_perfiles.estado','=', '1')->get();
      return PerfilPsicologicoEstadoResource::collection($perfiles);
    }

    public function obtenerResultado(Request $request)
    {
      
    }
}
