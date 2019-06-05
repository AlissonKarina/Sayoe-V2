<?php

namespace App\Http\Controllers;

use App\User;
use App\UnayoePerfil;
use App\Alumno;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        
    }

    public static function getUsuario($idUsuario, $model){
        $perfil = $model::where('id_usuario', '=' , $idUsuario)->get();
        if($perfil == null)
            return 0;
        return $perfil[0]['id'];
    }

    //
}
