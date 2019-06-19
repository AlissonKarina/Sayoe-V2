<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\UnayoePerfil;
use App\Model\Alumno;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function cambiarContrasenhaUnayoePerfil(Request $request)
    {
        $data = $request['data'];
        $unayoe = UnayoePerfil::find($data['id']);

        $usuario = $unayoe->usuario;
        $usuario->contrasenha = app('hash')->make($data['contrasenha']);
        $usuario->save();

        return response()->json("OK", 200);
    }

    public function cambiarContrasenhaAlumno(Request $request)
    {
        $data = $request['data'];
        $alumno = Alumno::find($data['codigo']);

        $usuario = $alumno->usuario;
        $usuario->contrasenha = app('hash')->make($data['contrasenha']);
        $usuario->save();

        return response()->json("OK", 200);
    }

    //
}
