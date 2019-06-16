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
        $strategy = new iEstrategiaInventarioBeck();
        
        foreach ($data['alternativa'] as $valor)
        {
            $total = $total + $valor['puntuacion']; 
        }

        $resultado = $strategy->resultado($total);
        
        $date = Helper::fechaActual();

        $estadoPerfil = EstadoPerfil::find($id_estado_perfil);
        $estadoPerfil->estado = '1';
        $estadoPerfil->fecha = $date;
        $estadoPerfil->valor = $total;
        $estadoPerfil->descripcion = $resultado;
        $estadoPerfil->save();

        return $resultado;
    }
}