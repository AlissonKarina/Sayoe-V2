<?php

namespace App\Model\Evaluaciones;

interface IEstrategia
{

    public function resultado($total);

    public function descripcion($indicador);

}