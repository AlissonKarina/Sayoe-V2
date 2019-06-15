<?php

namespace App\Http\Helper;
use Carbon\Carbon;


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
    
    public static function fecha_hora($fecha_hora){
        $fecha = substr($fecha_hora, 0, 10);
        $hora = substr($fecha_hora, 11, 5);

        return [
            "fecha" => $fecha,
            "hora" => $hora
        ];
    }

    public static function fechaActual(){
        $fecha = new \Carbon\Carbon();
        $date = $fecha->format('Y-m-d');

        return $date;
    }

    public static function semestre($mes){
        $mes = (int)$mes;
        if($mes >= 0 and $mes <= 3) {
            return 0;
        } else if ($mes >= 4 and $mes <= 7) {
            return 1;
        } else {
            return 2;
        }
    }
}
