<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model 
{
    protected $table='alternativas';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion', 'id_pregunta', 'puntuacion'
    ];

    public function pregunta()
    {
        return $this->belongsTo('App\Pregunta', 'id_pregunta', 'id');
    }

    public function respuestas()
    {
        return $this->hasMany('App\Respuesta', 'id_alternativa', 'id');
    }

    /* GIT HUB */
    /* <asdasdasd */
}
