<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model 
{
    protected $table='preguntas';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pregunta', 'bloque', 'id_cuest_eval', 
    ];

    public function cuestionarioEvaluacion()
    {
        return $this->belongsTo('App\Model\CuestionarioEvaluacion', 'id_cuest_eval', 'id');
    }

    public function alternativas()
    {
        return $this->hasMany('App\Model\Alternativa', 'id_pregunta', 'id');
    }

}
