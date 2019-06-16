<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EstadoPerfil extends Model 
{
    protected $table='estado_perfiles';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_perfil_psico', 'id_cuest_eval', 'estado', 'fecha', 'valor', 'descripcion'
    ];

    protected $casts = [
        'descripcion' => 'array'
    ];

    public function cuestionarioEvaluacion()
    {
        return $this->belongsTo('App\Model\CuestionarioEvaluacion', 'id_cuest_eval', 'id');
    }

    public function perfilPsicologico()
    {
        return $this->belongsTo('App\Model\PerfilPsicologico', 'id_perfil_psico', 'id_perfil');
    }

    public function resultadoInstantaneo(){
        $id_eva = $this->id_cuest_eval;
        $resultado = 'Not found';
        switch($id_eva){
            case 1:
                $resultado = $this->descripcion[5];
                break;
            case 2:
                $resultado = $this->descripcion;
                break;
            case 3:
                $resultado = $this->descripcion;
                break;
            case 5:
                $resultado = $this->descripcion[5];
                break;
        }
        return $resultado;
    }

}
