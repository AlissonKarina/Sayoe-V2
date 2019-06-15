<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PerfilPsicologico extends Model 
{
    protected $table='perfiles_psicologicos';
    protected $primaryKey = 'id_perfil';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_perfil','recomendacion', 'motivo', 'fecha_limite', 'fecha_resuelto', 'fecha_recomendacion', 'estado', 'codigo_alumno','anho','semestre'
    ];

    public function alumno()
    {
        return $this->belongsTo('App\Model\Alumno', 'codigo_alumno', 'codigo');
    }

    public function estadosPerfil()
    {
        return $this->hasMany('App\Model\EstadoPerfil', 'id_perfil_psico', 'id_perfil');
    }

    public function respuestas()
    {
        return $this->hasMany('App\Model\Respuesta', 'id_pregunta', 'id_perfil');
    }

}
