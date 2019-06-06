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
        $semestre = Helper::semestre($request->mes);
        $perfil = PerfilPsicologico::where('codigo_alumno','=', $request->codigo)
                              ->where('anho','=', $request->anho)
                              ->where('semestre','=', $semestre)->get();
        return $perfil;
    }
}
