<?php

namespace App;

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
        'valor', 'descripcion', 'id_alternativa', 'id_pefil_psico',
    ];

    public function alternativa()
    {
        return $this->belongsTo('App\Alternativa', 'id_alternativa', 'id');
    }

    public function perfilPsicologico()
    {
        return $this->belongsTo('App\PerfilPsicologico', 'id_pefil_psico', 'id');
    }

}
