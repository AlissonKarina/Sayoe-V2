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
                ->get();
                       
      foreach ($perfiles as $perfil){
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
      }
      return response()->json($arrayTotal);
    }

    public function obtenerResultado(Request $request)
    {
      
    }
}
