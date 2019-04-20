<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CitaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'alumno' => new AlumnoShortResource($this->whenLoaded('alumno')),
            'estado' => $this->estado,
            'asunto' => $this->asunto,
            'fecha' => $this->fecha,
            'descripcion' => $this->descripcion,           
            
        ];
    }
} 