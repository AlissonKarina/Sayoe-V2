<?php

namespace App\Model\Evaluaciones;

interface iEstrategia
{

    public function resultado($total);

    public function descripcion($indicador);

}