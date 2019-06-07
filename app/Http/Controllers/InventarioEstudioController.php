<?php

namespace App\Http\Controllers;

use App\CuestionarioEvaluacion;
use App\Http\Resources\CuestionarioEvaluacionResource;
use Illuminate\Http\Request;
use App\Respuesta;
use App\EstadoPerfil;

class InventarioEstudioController extends Controller
{

    public function puntaje(Request $request){
        $total = 0;
        $data = $request->data;
        $id_pefil_psico = $data['id_perfil_psicologico'];
        $id_evaluacion = $data['id_cuest_eval'];

        foreach ($data['alternativa'] as $valor)
        {
            Respuesta::create([
                "id_alternativa" => $valor['id'],
                "id_pefil_psico" => $id_pefil_psico,
            ]);
            $total = $total + $valor['puntuacion']; 
        }

        $descripcion = $this->resultado($total);
        
        $fecha = new \Carbon\Carbon();
        $date = $fecha->format('d-m-Y');

        /* EstadoPerfil::where('anho','=', $request->anho)
        ->where('semestre','=', $semestre)->get();

        EstadoPerfil::create([
            "id_perfil_psico" => $id_pefil_psico,
            "id_cuest_eval" => $id_evaluacion,
            "estado" => '1',
            "fecha" => $fecha,
            "valor" => $total,
            "descripcion" => $descripcion,
        ]);  */

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