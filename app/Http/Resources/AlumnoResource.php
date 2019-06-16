<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Helper\Helper;

class AlumnoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'codigo' => $this->codigo,
            'ciclo' => $this->ciclo,
            'nombre' => $this->persona->apellido_paterno." ".$this->persona->apellido_materno.", ".$this->persona->nombre,
            'sexo' => $this->persona->sexo,
            'edad' => Helper::edad($this->persona->fecha_nacimiento),
            'escuela' => $this->escuelaProfesional->nombre,
            'situacion' => $this->situacion,
        ];
    }
}