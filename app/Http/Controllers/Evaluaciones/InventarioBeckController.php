<?php

namespace App\Http\Controllers\Evaluaciones;

use App\Model\CuestionarioEvaluacion;
use App\Http\Resources\CuestionarioEvaluacionResource;
use Illuminate\Http\Request;
use App\Model\Respuesta;
use App\Model\EstadoPerfil;
use App\Http\Controllers\Controller;
use App\Http\Helper\Helper;

class InventarioBeckController extends Controller
{

    public function puntaje(Request $request){
        $total = 0;
        $data = $request->data;
        $id_perfil_psico = $data['id_perfil_psico'];
        $id_estado_perfil = $data['id_estado_perfil'];
        
        foreach ($data['alternativa'] as $valor)
        {
            $total = $total + $valor['puntuacion']; 
        }

        $resultado = $this->resultado($total);
        
        $date = Helper::fechaActual();

        $estadoPerfil = EstadoPerfil::find($id_estado_perfil);
        $estadoPerfil->estado = '1';
        $estadoPerfil->fecha = $date;
        $estadoPerfil->valor = $total;
        $estadoPerfil->descripcion = $resultado;
        $estadoPerfil->save();

        return $resultado;
    }
    
    private function resultado($total){
        if($total>= 0 and $total<=13){
            return [
                'valor' => $total,
                'descripcion' => "no presenta signos de depresión"
            ]; 
        }else if ($total>= 14 and $total<=19){
            return [
                'valor' => $total,
                'descripcion' => "presenta signos de depresión leve"
            ];
        }else if ($total>= 20 and $total<=28){
            return [
                'valor' => $total,
                'descripcion' => "presenta signos de depresión moderado"
            ];
        }else if ($total>= 29 and $total<=63){
            return [
                'valor' => $total,
                'descripcion' => "presenta signos de depresión severo"
            ];
        }
    }


}