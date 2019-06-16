<?php

namespace App\Http\Controllers;

use App\Model\Alumno;
use App\Http\Resources\AlumnoShortResource;
use App\Http\Resources\AlumnoResource;
use Illuminate\Http\Request;
use App\Http\Helper\Helper;

class AlumnoController extends Controller
{
    public function index(){
        $alumnos = Alumno::all();
        return AlumnoShortResource::collection($alumnos);
    }

    public function show($codigo) {
        $alumno = Alumno::find($codigo);
        return new AlumnoResource($alumno);
    }

    public function create(Request $request)
    {
        $data = $request->data;
        
        $persona = Persona::create([
            'dni' => $data['dni'],
            'nombre' => $data['nombre'],
            'apellido_materno' => $data['apellido_materno'],
            'apellido_paterno' => $data['apellido_paterno'],
            'sexo' => $data['sexo'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
        ]);

        $usuario = Usuario::create([
            'usuario' => $data['usuario'],
            'contrasenha' => $data['contrasenha'],
        ]);
        
        $alumno = Alumno::create([
            'codigo' => $data['codigo'],
            'situacion' => $data['situacion'],
            'anho_ingreso' => $data['anho_ingreso'],
            'estado_permanencia' => $data['estado_permanencia'],
            'dni' => $persona->dni,
            'id_usuario' => $usuario->id,
            'id_escuela' => $data['id_escuela']
        ]);

       
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
                "nombre" => $alumno->persona->apellido_paterno.", ".Helper::primerNombre($alumno->persona->nombre),
                "foto" => $alumno->persona->foto,
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