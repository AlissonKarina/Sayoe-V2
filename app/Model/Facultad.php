<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{

    protected $table='facultades';

    public $timestamps = false;
    
    protected $fillable = [
        'nombre',
    ];

    public function escuelasProfesionales()
    {
        return $this->hasMany('App\Model\EscuelaProfesional', 'id_facultad', 'id');
    }

    public function unayoePerfil()
    {
        return $this->hasOne('App\Model\UnayoePerfil', 'id_facultad', 'id');
    }
}
