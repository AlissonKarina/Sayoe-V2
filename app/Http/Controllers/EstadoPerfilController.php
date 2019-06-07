<?php

namespace App\Http\Controllers;

use App\Model\Usuario;
use Illuminate\Http\Request;
use App\Model\EstadoPerfil;
use App\Model\PerfilPsicologico;
use App\Http\Helper\Helper;
use App\Http\Resources\PerfilPsicologicoEstadoResource;


class EstadoPerfilController extends Controller
{
    public function evaluaciones(Request $request)
    {
      $semestre = Helper::semestre($request->mes);
      $perfiles = PerfilPsicologico::with('estadosPerfil')
                ->where('codigo_alumno','=', $request->codigo)
                ->where('anho','=', $request->anho)
                ->where('semestre','=', $semestre)->get();
      return PerfilPsicologicoEstadoResource::collection($perfiles);
    }

    public function obtenerResultado(Request $request)
    {
      
    }
}
