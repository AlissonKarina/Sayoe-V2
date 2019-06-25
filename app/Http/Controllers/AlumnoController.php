<?php

namespace App\Http\Controllers;

use App\Model\Alumno;
use App\Model\Persona;
use App\Model\Usuario;
use App\Http\Resources\AlumnoShortResource;
use App\Http\Resources\AlumnoResource;
use App\Http\Resources\AlumnoDetailsResource;
use Illuminate\Http\Request;
use App\Http\Helper\Helper;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\AlumnoCreateRequest;

class AlumnoController extends Controller
{
    public function index(){
        $alumnos = Alumno::all();
        return AlumnoShortResource::collection($alumnos);
    }

    public function show($codigo) {
        $alumno = Alumno::find($codigo);
        if($alumno == null) {
            return response()->json(['data' => 'El código no existe'],200);
        }
        return new AlumnoDetailsResource($alumno);
    }

    public function create(AlumnoCreateRequest $request)
    {
        $data = $request->data;

        Persona::create([
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
        
        Alumno::create([
            'codigo' => $data['codigo'],
            'ciclo' => $data['ciclo'],
            'promedio' => $data['promedio'],
            'total_creditos'=> $data['total_creditos'],
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
        if($alumno == null) {
            return response()->json(['data' => 'El código no existe'],200);
        }
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
        $alumno = Alumno::where('id_usuario', '=' , $idUsuario)->get();
        
        if(count($alumno) == 0){
            return 0;
        }
        return $alumno[0]['codigo'];
    }

    public function updateUnayoe(Request $request)
    {
        $data = $request['data'];

        $alumno = Alumno::find($data['codigo']);
        $alumno->situacion = strtoupper($data['situacion']);
        $alumno->promedio = $data['promedio'];
        $alumno->anho_ingreso = $data['anho_ingreso'];
        $alumno->estado_permanencia = strtoupper($data['estado_permanencia']);
        $alumno->total_creditos = $data['total_creditos'];
        $alumno->ciclo = $data['ciclo'];

        $persona = Persona::find($alumno->dni);
        $persona->nombre = strtoupper($data['nombre']);
        $persona->apellido_materno = strtoupper($data['apellido_materno']);
        $persona->apellido_paterno = strtoupper($data['apellido_paterno']);
        $persona->sexo = strtoupper($data['sexo']);
        $persona->celular = $data['celular'];
        $persona->telefono = $data['telefono'];
        $persona->direccion = strtoupper($data['direccion']);
        $persona->correo_personal = $data['correo_personal'];

        $alumno->save();
        $persona->save();
             
        return response()->json("OK", 200);
    }
    
    public function updateAlumno(Request $request)
    {
        $data = $request['data'];

        $alumno = Alumno::find($data['codigo']);

        $persona = $alumno->persona;
        $persona->sexo = strtoupper($data['sexo']);
        $persona->celular = $data['celular'];
        $persona->telefono = $data['telefono'];
        $persona->direccion = strtoupper($data['direccion']);
        $persona->correo_personal = $data['correo_personal'];

        $persona->save();
             
        return response()->json("OK", 200);
    }
}