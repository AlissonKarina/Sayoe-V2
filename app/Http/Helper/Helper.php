<?php

namespace App\Http\Helper;


class Helper extends Controller
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
    
    public function fecha($fecha){
        $dia = $fecha[0].$fecha[1];
        $mes = $fecha[3].$fecha[4];
        $anho = $fecha[6].$fecha[7].$fecha[8].$fecha[9];

        return $dia;
    }
}
