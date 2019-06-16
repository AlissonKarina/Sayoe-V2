<?php

namespace App\Model\Evaluaciones;

use App\Model\Evaluaciones\iEstrategia;

class iEstrategiaInventarioBeck implements iEstrategia
{
    public function resultado($total)
    {
        if($total>= 0 and $total<=13){
            $descipcion = $this->descripcion(0); 
        }else if ($total>= 14 and $total<=19){
            $descipcion = $this->descripcion(1); 
        }else if ($total>= 20 and $total<=28){
            $descipcion = $this->descripcion(2); 
        }else if ($total>= 29 and $total<=63){
            $descipcion = $this->descripcion(3); 
        }
        return [
            'valor' => $total,
            'descripcion' => $descipcion
        ];
    }

    public function descripcion($indicador)
    {
        switch($indicador){
            case 0: 
                return "no presenta signos de depresión";
                
            case 1: 
                return "presenta signos de depresión leve";
                
            case 2: 
                return "presenta signos de depresión moderado";
                
            case 3: 
                return "presenta signos de depresión severo";
                
        }
        return "Error";
    }

}