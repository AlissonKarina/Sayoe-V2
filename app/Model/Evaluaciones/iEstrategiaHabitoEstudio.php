<?php

namespace App\Model\Evaluaciones;

use App\Model\CuestionarioEvaluacion;
use App\Http\Resources\CuestionarioEvaluacionResource;
use Illuminate\Http\Request;
use App\Model\Respuesta;
use App\Model\EstadoPerfil;
use App\Http\Controllers\Controller;
use App\Http\Helper\Helper;
use App\Model\Evaluaciones\iEstrategia;

class iEstrategiaHabitoEstudio implements iEstrategia
{
    /* function __constructor(EstadoPerfil $estado){
        $this = $estado;
    } */

    public static function resultado($total)
    {
        $array = [
            [10, 8, 5, 3, 1, 0],
            [10, 8, 6, 3, 1, 0],
            [11, 9, 7, 4, 2, 0],
            [10, 8, 6, 4, 2, 0],
            [ 7, 6, 5, 4, 1, 0],
            [44, 36, 28, 18, 9, 0],
        ];

        $descripcion=[];

        for ($i = 0; $i < 6; $i ++)
        {
            if($total[$i]>=$array[$i][0]){
                $desc = $this->descripcion(5);
            }else if ($total[$i]>=$array[$i][1]){
                $desc = $this->descripcion(4);
            }else if ($total[$i]>=$array[$i][2]){
                $desc = $this->descripcion(3);
            }else if ($total[$i]>=$array[$i][3]){
                $desc = $this->descripcion(2);
            }else if ($total[$i]>=$array[$i][4]){
                $desc = $this->descripcion(1);
            }else if ($total[$i]>=$array[$i][5]){
                $desc = $this->descripcion(0);
            }
            array_push($descripcion, [
                'valor' => $total[$i],
                'descripcion' => $desc
            ]);
        }

        return $descripcion;
    }

    public function descripcion($indicador)
    {
        $desc = [];
        switch($indicador){
            case 5: 
                $desc = [
                    'id' => 5,
                    'titulo' => 'MUY POSITIVO',
                    'contenido' => 'Posee hábitos de estudio, definitivamente positivos o adecuados, teniendo en sus técnicas de estudio un apoyo efectivo en el proceso de aprendizaje académico.'
                ];
                break;
            case 4: 
                $desc = [
                    'id' => 4,
                    'titulo' => 'POSITIVO',
                    'contenido' => 'Posee en forma significativa un mayor número de hábitos adecuados de estudio, pero hay algunas formas de recoger la información y de trabajo que deberían ser corregidas.'
                ];
                break;
            case 3: 
                $desc = [
                    'id' => 3,
                    'titulo'=>'TENDENCIA POSITIVA',
                    'contenido' =>  'Siendo significativamente en sus hábitos de estudio diferentes a los estudiantes que tienen bajo rendimeinto escolar no obstante poseen técnicas y formas de recoger información que dificultan un mejor resutado académico siendo necesario revisar sus hábitos con puntuación CERO y decidir hoy la correción permanente.'
                ];
                break;
            case 2: 
                $desc = [
                    'id' => 2,
                    'titulo'=>'TENDENCIA NEGATIVA',
                    'contenido' =>  'Siendo significativamente en sus hábitos de estudio diferentes a los estudiantes que tienen bajo rendimeinto escolar no obstante poseen técnicas y formas de recoger información que dificultan un mejor resutado académico siendo necesario revisar sus hábitos con puntuación CERO y decidir hoy la correción permanente.'
                ];
                break;
            case 1: 
                $desc = [
                    'id' => 1,
                    'titulo'=>'NEGATIVO',
                    'contenido' =>  'Siendo significativamente en sus hábitos de estudio diferentes a los estudiantes que tienen bajo rendimeinto escolar no obstante poseen técnicas y formas de recoger información que dificultan un mejor resutado académico siendo necesario revisar sus hábitos con puntuación CERO y decidir hoy la correción permanente.'
                ];
                break;
            case 0: 
                $desc = [
                    'id' => 0,
                    'titulo'=>'MUY NEGATIVO',
                    'contenido' =>  'Siendo significativamente en sus hábitos de estudio diferentes a los estudiantes que tienen bajo rendimeinto escolar no obstante poseen técnicas y formas de recoger información que dificultan un mejor resutado académico siendo necesario revisar sus hábitos con puntuación CERO y decidir hoy la correción permanente.'
                ];
                break;
        }
        return $desc;
    }

}