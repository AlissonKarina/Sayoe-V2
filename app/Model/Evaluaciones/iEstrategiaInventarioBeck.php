<?php

namespace App\Model\Evaluaciones;

use App\Model\Evaluaciones\IEstrategia;

class IEstrategiaInventarioBeck implements IEstrategia
{
    public function resultado($total)
    {
        $descripcion=[];
        if($total>= 0 && $total<=13){
            $desc = $this->descripcion(0); 
        }else if ($total>= 14 && $total<=19){
            $desc = $this->descripcion(1); 
        }else if ($total>= 20 && $total<=28){
            $desc = $this->descripcion(2); 
        }else if ($total>= 29 && $total<=63){
            $desc = $this->descripcion(3); 
        }
        array_push($descripcion, [
            'valor' => $total,
            'descripcion' => $desc
        ]);
        return $descripcion;
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
            
            default:
                return "Error, índice no valido";  
        }
    }

}