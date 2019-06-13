<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PerfilPsicologicoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'fecha_resuelto' => $this->fecha_resuelto,
            'alumno' => new AlumnoShortResource($this->whenLoaded('alumno')),   
        ];
    }
}