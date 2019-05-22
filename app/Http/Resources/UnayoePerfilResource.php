<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UnayoePerfilResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'apellido_paterno' => $this->apellido_paterno,
            'apellido_materno' => $this->apellido_materno,
            'sexo' => $this->sexo,
            'profesion' => $this->profesion,
            'facebook' => $this->facebook,
            'celular' => $this->celular,
            'correoAlternativo' => $this->correo,
            'wsp' => $this->wsp,
            'foto' => $this->foto,
            'auto_descripcion' => $this->auto_descripcion,
            'facultad' => $this->facultad->nombre,
            'correoPrincipal' => $this->usuario->correo,
            'estado' => $this->usuario->estado,
            'rol' => $this->usuario->rol->nombre,
        ]; 
    }
}
