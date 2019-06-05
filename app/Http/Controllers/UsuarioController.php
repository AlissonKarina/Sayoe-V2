<?php

namespace App\Http\Controllers;

use App\User;
use App\UnayoePerfil;
use App\Alumno;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        
    }

    public function fecha($fecha){
        $dia = $fecha[0].$fecha[1];
        $mes = $fecha[3].$fecha[4];
        $anho = $fecha[6].$fecha[7].$fecha[8].$fecha[9];

        return $dia;
    }

    //
}
