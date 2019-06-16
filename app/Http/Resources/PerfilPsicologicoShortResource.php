<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PerfilPsicologicoShortResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_perfil_psico' => $this->id_perfil,
            'fecha_resuelto' => $this->fecha_resuelto,
            'alumno' => new AlumnoShortResource($this->whenLoaded('alumno')),
            /* 'alumno' => new AlumnoShortResource($this->whenLoaded('alumno')),  */  
        ];
    }
}