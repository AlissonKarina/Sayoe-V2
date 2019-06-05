<?php

namespace App\Http\Helper;


class Helper
{
    public static function primerNombre ($nombres){
        $nombre= '';
        for($i=0 ; $i< strlen($nombres); $i++){
            if($nombres{$i} == ' '){
                return $nombre;
            }
            $nombre = $nombre.$nombres{$i};
        }
        return $nombre;
    }
    
    public static function fecha($fecha){
        $dia = $fecha[0].$fecha[1];
        $mes = $fecha[3].$fecha[4];
        $anho = $fecha[6].$fecha[7].$fecha[8].$fecha[9];

        return [
            "dia" => $dia,
            "mes" => $mes,
            'anho' => $anho
        ];
    }

    public static function semestre($mes, $anho){
        $semestre='';
        if($mes=='01' or $mes=='02' or $mes=='03'){
            $semestre = $anho.'-0';
        }else if($mes=='04' or $mes=='05' or $mes=='06'){
            $semestre = $anho.'-1';
        }else{
            $semestre = $anho.'-2';
        }
        return $semestre;
    }
}
