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
        'id_perfil_psico', 'id_cuest_eval', 'estado', 'fecha', 'descripcion'
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
        return $this->descripcion[0];
    }

}
