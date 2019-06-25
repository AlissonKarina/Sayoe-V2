<?php

namespace App\Http\Controllers\Evaluaciones;

use Illuminate\Http\Request;
use App\Model\EstadoPerfil;
use App\Http\Controllers\Controller;
use App\Http\Helper\Helper;
use App\Model\Evaluaciones\IEstrategia;

class InventarioBeckController extends Controller
{
    public $strategy = null;

    function __construct(IEstrategia $strategy){
        $this->strategy = $strategy ;
    }

    public function puntaje(Request $request){
        $total = 0;
        $data = $request->data;
        $id_estado_perfil = $data['id_estado_perfil'];
        
        foreach ($data['alternativa'] as $valor)
        {
            $total = $total + $valor['puntuacion']; 
        }

        $resultado = $this->strategy->resultado($total);
        
        $date = Helper::fechaHoraActual();

        $estadoPerfil = EstadoPerfil::find($id_estado_perfil);
        $estadoPerfil->estado = '1';
        $estadoPerfil->fecha = $date;
        $estadoPerfil->descripcion = $resultado;
        $estadoPerfil->save();

        return $resultado;
    }
}