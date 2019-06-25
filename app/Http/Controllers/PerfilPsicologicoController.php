<?php

namespace App\Http\Controllers;

use App\Model\PerfilPsicologico;
use App\Model\EstadoPerfil;
use App\Model\InfoAcadem;
use App\Model\Alumno;
use App\Model\EscuelaProfesional;
use App\Http\Helper\Helper;
use Illuminate\Http\Request;
use App\Http\Resources\AlumnoShortResource;
use App\Http\Resources\PerfilPsicologicoResource;
use App\Http\Resources\PerfilPsicologicoShortResource;
use App\Http\Resources\PerfilPsicologicoAlumnoShortResource;
use App\Http\Resources\EstadoPerfilResource;
use App\Http\Resources\AlumnoResource;
class PerfilPsicologicoController extends Controller
{   
    public function create(Request $request) 
    {
        if($request->isJson()){
            $data = $request->json()->all();

            $listAlumnos = $data['alumnos'];
            $listTest = $data["test"];
            
            $fechaLimite = [
                "dia" => $data["dia"],
                "mes" => $data["mes"],
                "anho" => $data["anho"]
            ];
            
            return $this->asignarTest($listAlumnos, $listTest, $fechaLimite);
        }
    }

    public function createGroup(Request $request) {
        if ($request->isJson()) {
            $data = $request->json()->all();

            $grupo = $data['grupo'];
            $test = $data['test'];
            $fechaLimite = [
                "dia" => $data["dia"],
                "mes" => $data["mes"],
                "anho" => $data["anho"]
            ];

            switch ($grupo) {
                case "sis": $alumnos = Alumno::where('id_escuela', 1)->get(); break;
                case "sof": $alumnos = Alumno::where('id_escuela', 2)->get(); break;
                case "1-2": $alumnos = Alumno::alumnosCiclo(1);
                            $alumnos2 = Alumno::alumnosCiclo(2); 
                            $alumnos->merge($alumnos2); break;
                case "3-4": $alumnos = Alumno::alumnosCiclo(3);
                            $alumnos2 = Alumno::alumnosCiclo(4); 
                            $alumnos->merge($alumnos2); break;
                case "5-6": $alumnos = Alumno::alumnosCiclo(5);
                            $alumnos2 = Alumno::alumnosCiclo(6); 
                            $alumnos->merge($alumnos2); break;
                case "7-8": $alumnos = Alumno::alumnosCiclo(7);
                            $alumnos2 = Alumno::alumnosCiclo(8); 
                            $alumnos->merge($alumnos2); break;
                case "9-10": $alumnos = Alumno::alumnosCiclo(9);
                            $alumnos2 = Alumno::alumnosCiclo(10); 
                            $alumnos->merge($alumnos2); break;
                case "obs": $listId = InfoAcadem::where('situacion', "O")->get(['id_alumno']);
                            $alumnos = Alumno::whereIn('id', $listId)->get();
                default:
                    return ["Error, grupo no existe."];
                    break;
            }

            return $this->asignarTest($alumnos, $test, $fechaLimite);
        }
    }
    
    public function asignarTest($listAlumnos, $listTest, $fechaLimite) {
        $mes= $fechaLimite['mes'];

        $semestre = Helper::semestre($mes);
        
        foreach ($listAlumnos as $a) {
            
            $perfil = PerfilPsicologico::create([
                'fecha_limite'  => $fechaLimite['anho'].'-'.$fechaLimite['mes'].'-'.$fechaLimite['dia'],
                'codigo_alumno' => $a['codigo'],
                'anho'          => $fechaLimite['anho'],
                'semestre'      => $semestre
            ]);

            foreach ($listTest as $t) {
                EstadoPerfil::create([
                    'id_perfil_psico' => $perfil->id_perfil,
                    'id_cuest_eval'=> $t['id'],                 
                ]);
            }
        }

        return response()->json("OK", 200);
    }

    public function perfilesPsicologicos(Request $request)
    {
        $arrayTotal = ["data" => []];
        $semestre = Helper::semestre($request->mes);

            $perfiles = PerfilPsicologico::with('alumno')
            ->where('anho','=', $request->anho)
            ->where('semestre','=', $semestre)
            ->where('estado','=', '1')
            ->whereNull('recomendacion')
            ->orderBy('fecha_resuelto', 'desc')
            ->get();
        
        $array = [
            "anho" => $request->anho,
            "semestre" => $semestre,
            "perfiles" => PerfilPsicologicoShortResource::collection($perfiles),
        ];
        array_push($arrayTotal['data'],$array);
        return response()->json($arrayTotal,200);
    }

    public function recomendaciones(Request $request)
    {
        $arrayTotal = ["data" => []];
        $semestre = Helper::semestre($request->mes);
            $perfiles = PerfilPsicologico::with('alumno')
            ->where('anho','=', $request->anho)
            ->where('semestre','=', $semestre)
            ->where('estado','=', '1')
            ->whereNotNull('recomendacion')
            ->orderBy('fecha_resuelto', 'desc')
            ->get();
        $array = [
            "anho" => $request->anho,
            "semestre" => $semestre,
            "perfiles" => PerfilPsicologicoShortResource::collection($perfiles),
        ];
        array_push($arrayTotal['data'],$array);

        return response()->json($arrayTotal, 200);
    }

    public function perfilesNoCulminados(Request $request)
    {
        $arrayTotal = ["data" => []];
        $semestre = Helper::semestre($request->mes);
            $perfiles = PerfilPsicologico::with('alumno')
            ->where('anho','=', $request->anho)
            ->where('semestre','=', $semestre)
            ->where('estado','=', '0')
            ->get();
        $array = [
            "anho" => $request->anho,
            "semestre" => $semestre,
            "perfiles" => PerfilPsicologicoShortResource::collection($perfiles),
        ];
        array_push($arrayTotal['data'],$array);

        return response()->json($arrayTotal, 200);
    }

    public function recomendar(Request $request)
    {
        $data = $request->data;
        $perfil = PerfilPsicologico::find($data['id_perfil_psico']);

        $perfil->recomendacion = $data['recomendacion'];
        $perfil->fecha_recomendacion = Helper::fechaHoraActual();
        $perfil->save();

        return response()->json("OK",200);
    }

    public function show($id)
    {//ver perfil psicologico segun ID, solo evaluaciones NO resueltas
        $perfil = PerfilPsicologico::with('alumno')->find($id);

        if($perfil == null){
            return response()->json('No existe');
        }

        $data = ['data' => [
            'perfil' => new PerfilPsicologicoResource($perfil),
            'alumno' => new AlumnoResource($perfil->alumno),
            'evaluaciones' => EstadoPerfilResource::collection($perfil->estadosPerfil),
        ]];

        return response()->json($data,200);
    }

    public function finalizarPerfil($id)
    { //luis me explique
        $fecha = Helper::fechaHoraActual();

        $perfil = PerfilPsicologico::find($id);
        $perfil->estado = 1;
        $perfil->fecha_resuelto = $fecha;
        $perfil->fecha_recomendacion = $fecha;
        $perfil->recomendacion = "--";
        
        $estados = EstadoPerfil::where('id_perfil_psico','=', $id)
                                ->where('estado','=', '0')
                                ->get();
                                
        foreach($estados as $estado){
            $estado->fecha = $fecha;
            $estado->estado = 1;
            $estado->descripcion = ["NO REALIZÓ"];
            $estado->save();
        }
        $perfil->save();
        return response()->json("OK",200);
    }

    public function perfilesAlumno($codigo)
    {
        $perfiles = PerfilPsicologico::with('alumno')
            ->where('codigo_alumno','=', $codigo)
            ->where('estado','=', 1)
            ->whereNotNull('recomendacion')
            ->orderBy('fecha_recomendacion', 'desc')
            ->get();
        
        $array = [
            "data" => PerfilPsicologicoAlumnoShortResource::collection($perfiles)
        ];

        return response()->json($array, 200);
    }

    public function recomendacionPerfil($id)
    {
        $perfil = PerfilPsicologico::find($id);
        $recomendacion = $perfil->recomendacion;
        if($recomendacion == null) {$recomendacion = "";}
        $data = [
            'data' => ["recomendacion" => $recomendacion]
        ];
        return response()->json($data,200);
    }
}