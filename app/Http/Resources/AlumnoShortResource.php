<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlumnoShortResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nombre' => $this->persona->apellido_paterno." ".$this->persona->apellido_materno.", ".$this->persona->nombre,
            'codigo' => $this->codigo,
            'escuela' => $this->escuelaProfesional->nombre,
            'situacion' => $this->situacion
        ];
    }
}