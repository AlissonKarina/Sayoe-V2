<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model 
{
    protected $table='mensajes';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mensaje_mes', 'mensaje_mision', 'mensaje_vision',
        'id_unayoe_perfil',
    ];

    public function unayoe_perfil()
    {
        return $this->belongsTo('App\Model\UnayoePerfil', 'id_unayoe_perfil', 'id');
    }

}
