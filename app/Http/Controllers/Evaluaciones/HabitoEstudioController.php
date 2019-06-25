<?php

namespace App\Http\Controllers\Evaluaciones;

use Illuminate\Http\Request;
use App\Model\Respuesta;
use App\Model\EstadoPerfil;
use App\Http\Controllers\Controller;
use App\Http\Helper\Helper;
use App\Model\Evaluaciones\IEstrategia;

class HabitoEstudioController extends Controller
{
    public $strategy = null;

    function __construct(IEstrategia $strategy){
        $this->strategy = $strategy ;
    }

    public function puntaje(Request $request){
        $data = $request->data;
        $id_perfil_psico = $data['id_perfil_psico'];
        $id_estado_perfil = $data['id_estado_perfil'];
        $puntuacion = 'puntuacion';

        $count = [0,0,0,0,0,0];

        foreach ($data['alternativa'] as $valor)
        {
            switch($valor['bloque']){
                case 1:
                    $count[1] += $valor[$puntuacion];
                    break;
                case 2:
                    $count[2] += $valor[$puntuacion];
                    break;
                case 3:
                    $count[3] += $valor[$puntuacion];
                    break;
                case 4:
                    $count[4] += $valor[$puntuacion];
                    break;
                case 5:
                    $count[5] += $valor[$puntuacion];
                    break;
                default:
                    return ["Error no existe el bloque."];
                    break;
            }
            
            Respuesta::create([
                "id_alternativa" => $valor['id'],
                "id_pefil_psico" => $id_perfil_psico,
            ]);
            $count[0] = $count[0] + $valor[$puntuacion]; 
        }

        $resultado = $this->strategy->resultado($count);
        
        $date = Helper::fechaHoraActual();

        $estadoPerfil = EstadoPerfil::find($id_estado_perfil);
        $estadoPerfil->estado = '1';
        $estadoPerfil->fecha = $date;
        $estadoPerfil->descripcion = $resultado;
        $estadoPerfil->save();

        return $resultado[0];
    }
}