<?php

namespace App\Http\Controllers;

use App\CuestionarioEvaluacion;
use App\Http\Resources\CuestionarioEvaluacionResource;
use Illuminate\Http\Request;

class InventarioEstudioController extends Controller
{

    public function puntaje(Request $request){
        $total = 0;
        $evaluacion = $request->data;

/*         for ($i = 0; $i < $evaluacion['nro_preguntas']; $i ++){
            $total = $total + $evaluacion['alternativa']['puntuacion'];          
        }
 */
        foreach ($evaluacion['alternativa'] as $valor)
        {
            $total = $total + $valor['puntuacion']; 
        }
        
        $descripcion = $this->resultado($total);
        
        return response()->json([
            "total" => $total,
            "descripcion" => $descripcion
        ]);
    }

    private function resultado($total){
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