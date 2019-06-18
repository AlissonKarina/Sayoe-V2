<?php

namespace App\Http\Controllers;

use App\Model\Alumno;
use App\Model\Persona;
use App\Model\Usuario;
use App\Http\Resources\AlumnoShortResource;
use App\Http\Resources\AlumnoResource;
use Illuminate\Http\Request;
use App\Http\Helper\Helper;
use Illuminate\Support\Facades\Validator;

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
        
        $v = Validator::make($data, [
            'dni' => 'required|unique:personas',
            'correo' => 'required|email|unique:usuarios',
            'codigo'    => 'required|unique:alumnos',
        ], [
            'dni.unique' => 'dni',
            'correo.unique' => 'correo',
            'codigo.unique' => 'codigo',
        ]);

         if ($v->fails()){
            return ['errors' => $v->errors()];
        }

        $persona = Persona::create([
            'dni' => $data['dni'],
            'nombre' => strtoupper($data['nombre']),
            'apellido_materno' => strtoupper($data['apellido_materno']),
            'apellido_paterno' => strtoupper($data['apellido_paterno']),
            'sexo' => strtoupper($data['sexo']),
            'fecha_nacimiento' => $data['fecha_nacimiento'],
        ]);

        $usuario = Usuario::create([
            'correo' => $data['correo'],
            'contrasenha' => app('hash')->make($data['contrasenha']),
            'estado' => '1',
            'autenticado' => '0',
            'id_rol' => '128963',
        ]);       
        
        $alumno = Alumno::create([
            'codigo' => $data['codigo'],
            'situacion' => strtoupper($data['situacion']),
            'anho_ingreso' => $data['anho_ingreso'],
            'estado_permanencia' => strtoupper($data['estado_permanencia']),
            'dni' => $data['dni'],
            'id_usuario' => $usuario->id,
            'id_escuela' => $data['id_escuela']
        ]);

       return response()->json("OK",200);
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

    public function update(Request $request)
    {
        $data = $reques['data'];
        Alumno::find($data['codigo']);

        $persona = Persona::create([
            'dni' => $data['dni'],
            'nombre' => strtoupper($data['nombre']),
            'apellido_materno' => strtoupper($data['apellido_materno']),
            'apellido_paterno' => strtoupper($data['apellido_paterno']),
            'sexo' => strtoupper($data['sexo']),
            'fecha_nacimiento' => $data['fecha_nacimiento'],
        ]);

        $usuario = Usuario::create([
            'correo' => $data['correo'],
            'contrasenha' => app('hash')->make($data['contrasenha']),
            'estado' => '1',
            'autenticado' => '0',
            'id_rol' => '128963',
        ]);       
        
        $alumno = Alumno::create([
            'codigo' => $data['codigo'],
            'situacion' => strtoupper($data['situacion']),
            'anho_ingreso' => $data['anho_ingreso'],
            'estado_permanencia' => strtoupper($data['estado_permanencia']),
            'dni' => $data['dni'],
            'id_usuario' => $usuario->id,
            'id_escuela' => $data['id_escuela']
        ]);
    }
}