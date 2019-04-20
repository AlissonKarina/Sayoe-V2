<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model 
{
    protected $table='citas';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigoCita', 'asunto', 'fecha', 'descripcion', 'estado', 'codigoAlumno',
        'id_unayoe_perfil',
    ];

    public function unayoePerfil()
    {
        return $this->belongsTo('App\UnayoePerfil', 'id_unayoe_perfil', 'id');
    }

    public function estudiante()
    {
        return $this->belongsTo('App\Alumno', 'codigoAlumno', 'codigo');
    }

}
