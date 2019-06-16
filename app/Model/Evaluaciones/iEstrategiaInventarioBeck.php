<?php

namespace App\Model\Evaluaciones;

use App\Model\Evaluaciones\iEstrategia;

class iEstrategiaInventarioBeck implements iEstrategia
{
    public function resultado($total)
    {
        if($total>= 0 and $total<=13){
            return $descipcion = $this->descripcion(0); 
        }else if ($total>= 14 and $total<=19){
            return $descipcion = $this->descripcion(1); 
        }else if ($total>= 20 and $total<=28){
            return $descipcion = $this->descripcion(2); 
        }else if ($total>= 29 and $total<=63){
            return $descipcion = $this->descripcion(3); 
        }
        return [
            'valor' => $total,
            'descripcion' => $this->descripcion(0)
        ];
    }

    public function descripcion($indicador)
    {
        switch($indicador){
            case 0: 
                $desc = "no presenta signos de depresión";
                break;
            case 1: 
                $desc = "presenta signos de depresión leve";
                break;
            case 2: 
                $desc = "presenta signos de depresión moderado";
                break;
            case 3: 
                $desc = "presenta signos de depresión severo";
                break;
        }
        return $desc;
    }

}