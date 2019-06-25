<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\EstadoPerfil;
use App\Model\PerfilPsicologico;
use App\Http\Helper\Helper;
use App\Http\Resources\PerfilPsicologicoEstadoResource;
use App\Http\Resources\EstadoPerfilShortResource;
use App\Http\Controllers\Evaluaciones\InventarioBeckController;
use App\Http\Controllers\Evaluaciones\HabitoEstudioController;
use App\Model\Evaluaciones\IEstrategiaHabitoEstudio;
use App\Model\Evaluaciones\IEstrategiaInventarioBeck;


class EstadoPerfilController extends Controller
{
    public function evaluacionesPendientes(Request $request)
    {
      return $this->evaluaciones($request, 0,'fecha_limite', 'asc');
    }

    public function evaluacionesRealizadas(Request $request)
    {
      return $this->evaluaciones($request, 1,'fecha_resuelto', 'desc');
    }

    private function evaluaciones(Request $request, $estado, $dato, $orden)
    {
      $arrayTotal = ["data" => []];
      
      $semestre = Helper::semestre($request->mes);

      $perfiles = PerfilPsicologico::with('estadosPerfil')
            ->where('codigo_alumno','=', $request->codigo)
            ->where('anho','=', $request->anho)
            ->where('semestre','=', $semestre)
            ->orderBy($dato, $orden)
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
          $controlador = new HabitoEstudioController(new IEstrategiaHabitoEstudio());
          break;
        case '2':
          $controlador = new InventarioBeckController(new IEstrategiaInventarioBeck());
          break;
        case '3':
          $controlador = new InventarioBeckController(new IEstrategiaInventarioBeck());
          break;
        case '5':
          $controlador = new HabitoEstudioController(new IEstrategiaHabitoEstudio());
          break;
        default:
          return ["Error no existe la Evaluación Psicologica."];
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
        $perfil->fecha_resuelto = Helper::fechaHoraActual();
        $perfil->save();
        return true;
    }

    public function show($id_estado_perfil)
    {
      $estado = EstadoPerfil::find($id_estado_perfil);
      $fecha_hora = Helper::fecha_hora($estado->fecha);
      $data = [
        'data'=> [
          'fecha' => $fecha_hora['fecha'],
          'hora' => $fecha_hora['hora'].' horas',
          'resultado' => $estado->resultadoInstantaneo(),
        ]
      ];
     
      return response()->json($data, 200);
    }
}
