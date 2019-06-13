<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PerfilPsicologicoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_perfil_psico' => $this->id_perfil,
            'anho' => $this->anho,
            'semestre' => $this->semestre,
            'alumno' => new AlumnoShortResource($this->whenLoaded('alumno'))            
            /* AlumnoShortResource::collection()    */      
        ];
    }
}