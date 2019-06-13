<?php

namespace App\Http\Controllers\Evaluaciones;

use App\Model\CuestionarioEvaluacion;
use App\Http\Resources\CuestionarioEvaluacionResource;
use Illuminate\Http\Request;
use App\Model\Respuesta;
use App\Model\EstadoPerfil;
use App\Http\Controllers\Controller;

class InventarioBeckController extends Controller
{

    public function puntaje(Request $request){
        $total = 0;
        $data = $request->data;
        $id_perfil_psico = $data['id_perfil_psico'];
        $id_estado_perfil = $data['id_estado_perfil'];
        
        foreach ($data['alternativa'] as $valor)
        {
            Respuesta::create([
                "id_alternativa" => $valor['id'],
                "id_pefil_psico" => $id_perfil_psico,
            ]);
            $total = $total + $valor['puntuacion']; 
        }

        $descripcion = $this->descripcion($total);
        
        $date = Helper::fechaActual();

        $estadoPerfil = EstadoPerfil::find($id_estado_perfil);
        $estadoPerfil->estado = '1';
        $estadoPerfil->fecha = $date;
        $estadoPerfil->valor = $total;
        $estadoPerfil->descripcion = $descripcion;
        $estadoPerfil->save();

        return response()->json([
            "total" => $total,
            "descripcion" => $descripcion
        ]);
    }
    
    private function descripcion($total){
        if($total>= 0 and $total<=13){
            return "no presenta signos de depresión";
        }else if ($total>= 14 and $total<=19){
            return "no presenta signos de depresión leve";
        }else if ($total>= 20 and $total<=28){
            return "no presenta signos de depresión moderado";
        }else if ($total>= 29 and $total<=63){
            return "no presenta signos de depresión severo";
        }
    }


}