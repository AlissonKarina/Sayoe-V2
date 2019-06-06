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

    public static function semestre($mes){
        $mes = (int)$mes;
        if($mes >= 0 and $mes <= 3) {
            return 0;
        } else if ($mes >= 4 and $mes <= 6) {
            return 1;
        } else {
            return 2;
        }
    }
}
