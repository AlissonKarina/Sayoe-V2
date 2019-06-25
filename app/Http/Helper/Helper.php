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
        return $fecha->format('Y-m-d');
    }

    public static function fechaHoraActual(){
        $fecha_hora = new \Carbon\Carbon();
        return $fecha_hora->format('Y-m-d H:i:s');
    }

    public static function semestre($mes){
        $mes = (int)$mes;
        if($mes >= 0 && $mes <= 3) {
            return 0;
        } else if ($mes >= 4 && $mes <= 7) {
            return 1;
        } else {
            return 2;
        }
    }

    public static function edad($fecha){
        $anho = (int)substr($fecha, 0, 10);
        $mes = (int)substr($fecha, 5, 2);
        $dia = (int)substr($fecha, 8, 2);
        return Carbon::createFromDate($anho,$mes,$dia)->age;
    }
}
