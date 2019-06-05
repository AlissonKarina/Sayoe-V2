<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Http\Resources\AlumnoShortResource;
use Illuminate\Http\Request;
use App\Http\Helper\Helper;

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
        $info = "Alumno no registrado";
        if($alumno != null){
            $info = [
                "nombre" => $alumno->apellido_paterno.", ".Helper::primerNombre($alumno->nombre),
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