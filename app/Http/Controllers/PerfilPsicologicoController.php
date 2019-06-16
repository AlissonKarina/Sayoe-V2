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
use App\Http\Resources\PerfilPsicologico_AlumnoResource;
use App\Http\Resources\EstadoPerfilResource;

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
            
            $value = $this->asignarTest($listAlumnos, $listTest, $fechaLimite);
            
            return $value;
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
            }

            $value = $this->asignarTest($alumnos, $test, $fecha_limite);
            return $value;
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

        return response()->json("listo", 200);
    }

    public function perfilesPendientes(Request $request)
    {
        $arrayTotal = ["data" => []];
        $semestre = Helper::semestre($request->mes);

            $perfiles = PerfilPsicologico::with('alumno')
            ->where('anho','=', $request->anho)
            ->where('semestre','=', $semestre)
            ->where('estado','=', '1')
            ->whereNull('recomendacion')
            ->orderBy('fecha_resuelto', 'asc')
            ->get();
        
        $array = [
            "anho" => $request->anho,
            "semestre" => $semestre,
            "perfiles" => PerfilPsicologico_AlumnoResource::collection($perfiles),
        ];
        array_push($arrayTotal['data'],$array);
        return response()->json($arrayTotal,200);
    }

    public function perfilesRealizados(Request $request)
    {
        $arrayTotal = ["data" => []];
        $semestre = Helper::semestre($request->mes);
            $perfiles = PerfilPsicologico::with('alumno')
            ->where('anho','=', $request->anho)
            ->where('semestre','=', $semestre)
            ->where('estado','=', '1')
            ->whereNotNull('recomendacion')
            ->orderBy('fecha_resuelto', 'asc')
            ->get();
        $array = [
            "anho" => $request->anho,
            "semestre" => $semestre,
            "perfiles" => PerfilPsicologico_AlumnoResource::collection($perfiles),
        ];
        array_push($arrayTotal['data'],$array);

        return response()->json($arrayTotal);
    }

    public function recomendar(Request $request)
    {
        $data = $request->data;
        $perfil = PerfilPsicologico::find($data['id_perfil_psico']);

        $perfil->recomendacion = $data['recomendacion'];
        $perfil->save();

        return response()->json("OK",200);;
    }

    public function show($id)
    {
        $perfil = PerfilPsicologico::find($id);
        $estado = EstadoPerfil::where('id_perfil_psico','=',$id)
        ->where('estado','=',1)
        ->get();

        if($perfil == null && $estado == null){
            return response()->json('No existe');
        }

        $data = [
            'perfil' => new PerfilPsicologicoResource($perfil),
            'cuestionario' => EstadoPerfilResource::collection($estado),
        ];

       /*  return response()->json($estado); */
        return response()->json($data);

    }
}