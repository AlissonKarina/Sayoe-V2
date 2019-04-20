<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilPsicologico extends Model 
{
    protected $table='perfiles_psicologicos';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'recomendacion', 'motivo', 'fecha_limite', 'estado', 'codigoEstudiante'
    ];

    public function estudiante()
    {
        return $this->belongsTo('App\Estudiante', 'codigoEstudiante', 'codigo');
    }

    public function estadosPerfil()
    {
        return $this->hasMany('App\EstadoPerfil', 'id_perfil_psico', 'id');
    }

    public function respuestas()
    {
        return $this->hasMany('App\Respuesta', 'id_pregunta', 'id');
    }

}
