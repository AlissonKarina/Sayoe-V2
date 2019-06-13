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

      $perfiles = PerfilPsicologico::with('estadosPerfil')
            ->where('codigo_alumno','=', $request->codigo)
            ->where('anho','=', $request->anho)
            ->where('semestre','=', $semestre)
            ->orderBy('fecha_limite', 'asc')
            ->get();

      foreach ($perfiles as $perfil){

          $evaluaciones = EstadoPerfil::where('id_perfil_psico','=',$perfil->id_perfil)
            ->where('estado','=',$estado)
            ->orderBy('fecha', 'desc')
            ->get();

          if(count($evaluaciones) != 0){
            $array = [
              "id_perfil_psico" => $perfil->id_perfil,
              "anho" => $perfil->anho,
              "semestre" => $perfil->semestre,
              "fecha_vencimiento" => $perfil->fecha_limite,
              "evaluaciones" => EstadoPerfilResource::collection($evaluaciones),
            ];
            
            array_push($arrayTotal['data'],$array);
          }
          
      }

      /* dd($arrayTotal); */
            

      return response()->json($arrayTotal);

      /* return response()->json($perfiles); */
    }

    public function show($id_estado_perfil)
    {
      $estadoPerfil = EstadoPerfil::find($id_estado_perfil);

      return response()->json([
        "descripcion" => $estadoPerfil->descripcion
      ]);

    }

    public function obtenerResultado(Request $request)
    {
      
    }
}
