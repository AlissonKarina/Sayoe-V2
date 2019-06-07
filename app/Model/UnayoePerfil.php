<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UnayoePerfil extends Model
{

    protected $table='unayoe_perfiles';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nombre', 'apellido_paterno', 'apellido_materno', 'sexo', 'profesion', 'facebook',
        'celular', 'wsp', 'correo', 'foto', 'auto_descripcion', 'id_usuario', 'id_facultad'
    ];

    public function facultad()
    {
        return $this->belongsTo('App\Model\Facultad', 'id_facultad', 'id');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Model\Usuario', 'id_usuario', 'id');
    }

    public function mensajes()
    {
        return $this->hasMany('App\Model\Mensaje', 'id_unayoe_perfil', 'id');
    }

    public function citas()
    {
        return $this->hasMany('App\Model\Cita', 'id_unayoe_perfil', 'id');
    }

}
