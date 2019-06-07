<?php

namespace App\Http\Controllers;

use App\Model\CuestionarioEvaluacion;
use App\Http\Resources\CuestionarioEvaluacionResource;
use Illuminate\Http\Request;
use App\Model\Respuesta;
use App\Model\EstadoPerfil;

class InventarioEstudioController extends Controller
{

    public function puntaje(Request $request){
        $total = 0;
        $data = $request->data;
        $id_perfil_psico = $data['id_perfil_psico'];
        $id_cuest_eval = $data['id_cuest_eval'];
        
        foreach ($data['alternativa'] as $valor)
        {
            Respuesta::create([
                "id_alternativa" => $valor['id'],
                "id_pefil_psico" => $id_perfil_psico,
            ]);
            $total = $total + $valor['puntuacion']; 
        }

        $descripcion = $this->descripcion($total);
        
        $fecha = new \Carbon\Carbon();
        $date = $fecha->format('d-m-Y');

        $estadoPerfil = EstadoPerfil::where('id_perfil_psico','=', $id_perfil_psico)
        ->where('id_cuest_eval','=', $id_cuest_eval)->get();
        

        $estadoPerfil->estado = 1;
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
        if($total>= 0 or $total<=13){
            return "El alumno no presenta signos de depresión";
        }else if ($total>= 14 or $total<=19){
            return "El alumno no presenta signos de depresión leve";
        }else if ($total>= 20 or $total<=28){
            return "El alumno no presenta signos de depresión moderado";
        }else if ($total>= 29 or $total<=63){
            return "El alumno no presenta signos de depresión severo";
        }
    }


}