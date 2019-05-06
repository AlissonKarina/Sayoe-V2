<?php

namespace App;

use App\InfoAcadem;
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
        'dni', 'nombre', 'apellido_materno', 'apellido_paterno', 'dni', 'sexo', 'fecha_nacimiento', 'foto',
        'telefono', 'celular', 'direccion', 'correo_personal'
    ];


    public function estudiante()
    {
        return $this->hasOne('App\Alumno', 'dni', 'dni');
    }

/*     public static function idAlumno ($codigo)
    {
        return (Alumno::select('id')->find($codigo))["id"];
    }

    public static function alumnosCiclo($ciclo) {
        $listId = InfoAcadem::where('ciclo', $ciclo)->get(['id_alumno']);
        return Alumno::whereIn('id', $listId)->get();
    } */

    
}
