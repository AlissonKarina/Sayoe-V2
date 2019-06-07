<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CuestionarioEvaluacion extends Model 
{
    protected $table='cuestionario_evaluaciones';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo','titulo_secundario', 'autor', 'nro_preguntas'
    ];
    
    public function estadosPerfil()
    {
        return $this->hasMany('App\Model\EstadoPerfil', 'id_cuest_eval', 'id');
    }

    public function resultados()
    {
        return $this->hasMany('App\Model\Resultado', 'id_cuest_eval', 'id');
    }

    public function preguntas()
    {
        return $this->hasMany('App\Model\Pregunta', 'id_cuest_eval', 'id');
    }

    public function alternativas()
    {
        return $this->hasManyThrough('App\Model\Alternativa', 'App\Model\Pregunta','id_cuest_eval',
                                    'id_pregunta','id','id');
    }
}
