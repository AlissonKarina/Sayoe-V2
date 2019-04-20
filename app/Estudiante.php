<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model 
{
    protected $table='estudiantes';
    protected $primaryKey = 'codigo';

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
        return $this->belongsTo('App\Persona', 'dni', 'dni');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'id_usuario', 'id');
    }

    public function escuelaProfesional()
    {
        return $this->belongsTo('App\EscuelaProfesional', 'id_escuela', 'id');
    }

    public function cursosObservados()
    {
        return $this->hasMany('App\CursoObservado', 'codigoEstudiante', 'codigo');
    }

    public function citas()
    {
        return $this->hasMany('App\Cita', 'codigoEstudiante', 'codigo');
    }

    public function perfilesPsicologicos()
    {
        return $this->hasMany('App\PerfilPsicologico', 'codigoEstudiante', 'codigo');
    }

}
