<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PerfilPsicologicoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            // no uso
            new AlumnoShortResource($this->whenLoaded('alumno'))            
            /* AlumnoShortResource::collection()    */      
        ];
    }
}