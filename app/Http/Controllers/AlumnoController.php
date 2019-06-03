<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Http\Resources\AlumnoShortResource;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function show($id) {
        $alumno = Alumno::find($id);
    }

    public function shortAlumno($codigo) {
        $alumno = $this::alumno($codigo);
        return new AlumnoShortResource($alumno);
    }


    public static function alumno($codigo){
        $alumno = Alumno::where('codigo','=',$codigo)->get();
        return $alumno;
    }
}