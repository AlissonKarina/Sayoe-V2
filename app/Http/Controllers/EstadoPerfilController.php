<?php

namespace App\Http\Controllers;

use App\Model\Usuario;
use Illuminate\Http\Request;
use App\Model\EstadoPerfil;
use App\Model\Evaluaciones\HabitoEstudio;
use App\Model\PerfilPsicologico;
use App\Http\Helper\Helper;
use App\Http\Resources\PerfilPsicologicoEstadoResource;
use App\Http\Resources\EstadoPerfilShortResource;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Evaluaciones\InventarioBeckController;
use App\Http\Controllers\Evaluaciones\HabitoEstudioController;


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

    private function evaluaciones(Request $request, $estado)
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
              "evaluaciones" => EstadoPerfilShortResource::collection($evaluaciones),
            ];
            
            array_push($arrayTotal['data'],$array);
          }
          
      }
      return response()->json($arrayTotal,200);
    }

    public function obtenerResultado(Request $request){
      $data = $request->data;
      $id_cuest_eval = $data['id_cuest_eval'];
      $id_perfil_psico = $data['id_perfil_psico'];
      switch($id_cuest_eval){
        case '1':
          $controlador = new HabitoEstudioController();
          break;
        case '2':
          $controlador = new InventarioBeckController();
          break;
        case '3':
          $controlador = new InventarioBeckController();
          break;
        case '5':
          $controlador = new HabitoEstudioController();
          break;

      }
      $resultado = ['data' => [
        'id_cuest_eval' => $id_cuest_eval,
        'resultado' => $controlador->puntaje($request)
      ]];
      
      $this->revisar($id_perfil_psico);
      return $resultado;
    }

    private function revisar($id_perfil_psico)
    {
        $evaluaciones = EstadoPerfil::where('id_perfil_psico','=', $id_perfil_psico)
                    ->get();
        foreach ($evaluaciones as $eva){
          if($eva->estado == '0'){
            return false;
          }
        }

        $perfil = PerfilPsicologico::find($id_perfil_psico);
        $perfil->estado = '1';
        $perfil->fecha_resuelto = Helper::fechaActual();
        $perfil->save();
        return true;
    }

    public function show($id_estado_perfil)
    {
      $estado = EstadoPerfil::find($id_estado_perfil);
      $id_eva = $estado->id_cuest_eval;
      $data="Evaluacion no existente";
      if($id_eva == 1 or $id_eva == 5){
        $data = ['data'=> $estado->descripcion[5]];
      }else if($id_eva == 2 or $id_eva== 3){
        $data = ['data'=> $estado->descripcion];
      }
      
      return response()->json($data, 200);
    }
}
