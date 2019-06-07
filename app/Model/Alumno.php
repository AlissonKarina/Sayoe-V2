<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model 
{
    protected $table='alumnos';
    protected $primaryKey = 'codigo';
    protected $keyType = "string";

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo', 'ciclo', 'situacion', 'promedio', 'anho_ingreso', 'estado_permanencia',
        'total_creditos', 'dni', 'id_usuario', 'id_escuela'
    ];

    public function persona()
    {
        return $this->belongsTo('App\Model\Persona', 'dni', 'dni');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Model\Usuario', 'id_usuario', 'id');
    }

    public function escuelaProfesional()
    {
        return $this->belongsTo('App\Model\EscuelaProfesional', 'id_escuela', 'id');
    }

    public function cursosObservados()
    {
        return $this->hasMany('App\Model\CursoObservado', 'codigo_alumno', 'codigo');
    }

    public function citas()
    {
        return $this->hasMany('App\Model\Cita', 'codigo_alumno', 'codigo');
    }

    public function perfilesPsicologicos()
    {
        return $this->hasMany('App\Model\PerfilPsicologico', 'codigo_alumno', 'codigo');
    }

}
