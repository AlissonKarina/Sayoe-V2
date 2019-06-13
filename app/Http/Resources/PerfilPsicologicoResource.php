<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PerfilPsicologicoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'fecha_resuelto' => $this->fecha_resuelto,
            'recomendacion' => $this->when($this->recomendacion != null, $this->recomendacion),
            'alumno' => new AlumnoShortResource($this->whenLoaded('alumno')),   
        ];
    }
}