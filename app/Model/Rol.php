<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model 
{
    protected $table='roles';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
    ];

    public function usuarios()
    {
        return $this->hasMany('App\Model\Usuario','id_rol', 'id');
    }
}
