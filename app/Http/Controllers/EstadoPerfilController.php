<?php

namespace App\Http\Controllers;

use App\Model\Usuario;
use Illuminate\Http\Request;
use App\Model\EstadoPerfil;
use App\Model\PerfilPsicologico;
use App\Http\Helper\Helper;
use App\Http\Resources\PerfilPsicologicoEstadoResource;
use Illuminate\Support\Facades\DB;


class EstadoPerfilController extends Controller
{
    public function evaluacionesPendientes(Request $request)
    {
      $semestre = Helper::semestre($request->mes);
     /*  $perfiles = PerfilPsicologico::with('estadosPerfil')
                ->join('estado_perfiles', 'estado_perfiles.id_perfil_psico', '=', 'perfiles_psicologicos.id')
                ->where('codigo_alumno','=', $request->codigo)
                ->where('anho','=', $request->anho)
                ->where('semestre','=', $semestre)->get(); */
                
      $perfiles = DB::table('perfiles_psicologicos')
            ->join('estado_perfiles', 'estado_perfiles.id_perfil_psico', '=', 'perfiles_psicologicos.id')
            ->where('perfiles_psicologicos.codigo_alumno','=', $request->codigo)
            ->where('perfiles_psicologicos.anho','=', $request->anho)
            ->where('perfiles_psicologicos.semestre','=', $semestre)
            ->where('estado_perfiles.estado','=', '0')
            ->get();
            /* ->select('users.*', 'contacts.phone', 'orders.price')
            ->get(); */
      /* return PerfilPsicologicoEstadoResource::collection($perfiles); */
      return $perfiles;
    }

    public function evaluacionesRealizadas(Request $request)
    {
      $semestre = Helper::semestre($request->mes);
      $perfiles = PerfilPsicologico::with('estadosPerfil')
                ->where('codigo_alumno','=', $request->codigo)
                ->where('anho','=', $request->anho)
                ->where('semestre','=', $semestre)
                ->where('estado','=', 1)->get();
      return PerfilPsicologicoEstadoResource::collection($perfiles);
    }

    public function obtenerResultado(Request $request)
    {
      
    }
}
