<?php

namespace App\Http\Controllers;

use App\Model\CuestionarioEvaluacion;
use App\Http\Resources\CuestionarioEvaluacionResource;
use Illuminate\Http\Request;

class CuestionarioEvaluacionController extends Controller
{
    public function index() {
        return CuestionarioEvaluacionResource::collection(CuestionarioEvaluacion::with('preguntas')->paginate(25));
    }

    public function show($id) {
        $cuestionario = CuestionarioEvaluacion::with('preguntas')->where('id', $id)->get();
        return CuestionarioEvaluacionResource::collection($cuestionario);
    }
}