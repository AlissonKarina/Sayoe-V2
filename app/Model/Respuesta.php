<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model 
{
    protected $table='respuestas';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_alternativa', 'id_pefil_psico',
    ];

    public function alternativa()
    {
        return $this->belongsTo('App\Model\Alternativa', 'id_alternativa', 'id');
    }

    public function perfilPsicologico()
    {
        return $this->belongsTo('App\Model\PerfilPsicologico', 'id_pefil_psico', 'id_perfil');
    }

}
