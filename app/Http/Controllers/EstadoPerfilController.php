<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use App\EstadoPerfil;
use App\PerfilPsicologico;


class EstadoPerfilController extends Controller
{
    public function evaluaciones(Request $request)
    {

        $perfil = PerfilPsicologico::where('codigo_alumno','=', $request->codigo)
                              ->where('semestre','=', $$request->semestre)->get();
        return $perfil->estadosPerfil;
    }
}
