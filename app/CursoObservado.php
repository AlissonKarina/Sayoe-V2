<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoObservado extends Model
{

    protected $table='cursos_observados';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'nota', 'codigo_alumno', 
    ];

    public function estudiante()
    {
        return $this->belongsTo('App\Alumno', 'codigo_alumno', 'codigo');
    }
}
