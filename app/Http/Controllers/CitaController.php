<?php

namespace App\Http\Controllers;

use App\Model\Cita;
use App\Http\Resources\CitaResource;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index() {
        return CitaResource::collection(Cita::orderBy('fecha', 'asc')
        ->get());
    }
    
    public function create(Request $request) {
        if ($request->isJson()) {
            $data = $request['data'];

            /** 1 : Esperando
             *  2 : Asistió
             *  3 : No Asistió
             */
            $cita = new Cita;
            $cita->codigo_alumno = $data['codigo'];
            $cita->asunto = $data['asunto'];
            /** debo saber cómo me enviará la fecha xD */
            $cita->fecha = $data['fecha_hora'];
            $cita->descripcion = $data['descripcion'];
            $cita->estado = 1;
            $cita->id_unayoe_perfil = $data['id_unayoe_perfil'];
            
            $cita->save();
            
            return response()->json('OK', 200);
        }
    }

}