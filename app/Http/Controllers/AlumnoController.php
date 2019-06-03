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
        $alumno = Alumno::find($codigo);
        return new AlumnoShortResource($alumno);
    }

}