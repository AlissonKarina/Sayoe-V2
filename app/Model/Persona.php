<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model 
{
    protected $table='personas';

    protected $primaryKey = 'dni';
    protected $keyType = "string";
    /* aasdasd */
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni', 'nombre', 'apellido_materno', 'apellido_paterno', 'sexo', 'fecha_nacimiento', 'foto',
        'telefono', 'celular', 'direccion', 'correo_personal'
    ];

    protected $casts = [
        'foto' => 'array'
    ];

    public function estudiante()
    {
        return $this->hasOne('App\Model\Alumno', 'dni', 'dni');
    }
    
}
