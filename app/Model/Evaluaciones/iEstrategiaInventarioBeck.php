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

class iEstrategiaInventarioBeck implements iEstrategia
{
    /* function __constructor(EstadoPerfil $estado){
        $this = $estado;
    } */

    private function resultado($total)
    {
        if($total>= 0 and $total<=13){
            return $this->descripcion(0); 
        }else if ($total>= 14 and $total<=19){
            return $this->descripcion(1); 
        }else if ($total>= 20 and $total<=28){
            return $this->descripcion(2); 
        }else if ($total>= 29 and $total<=63){
            return $this->descripcion(3); 
        }
    }

    public function descripcion($indicador)
    {
        switch($indicador){
            case 0: 
                $desc = [
                    'valor' => $total,
                    'descripcion' => "no presenta signos de depresión"
                ];
                break;
            case 1: 
                $desc = [
                    'valor' => $total,
                    'descripcion' => "presenta signos de depresión leve"
                ];
                break;
            case 2: 
                $desc = [
                    'valor' => $total,
                    'descripcion' => "presenta signos de depresión moderado"
                ];
                break;
            case 3: 
                $desc = [
                    'valor' => $total,
                    'descripcion' => "presenta signos de depresión severo"
                ];
                break;
        }
        return $desc;
    }

}