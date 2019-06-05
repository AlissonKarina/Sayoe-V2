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

    public function short($codigo) {
        $alumno = Alumno::find($codigo);
        return response()->json($alumno);
        if($alumno != null){
            $info = [
                "nombre" => $alumno->apellido_paterno.", ".$this->primerNombre($alumno->nombre),
                "foto" => $alumno->foto,
            ];
        }
        return response()->json($info);
    }

    public static function getUsuario($idUsuario){
        /* return $model; */
        $alumno = Alumno::where('id_usuario', '=' , $idUsuario)->get();
        
        if(count($alumno) == 0){
            return 0;
        }
        return $alumno[0]['codigo'];
    }
}