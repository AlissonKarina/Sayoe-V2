<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Helper\Helper;

class PerfilPsicologicoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            //NO SE USA
            /* 'alumno' => new AlumnoResource($this->alumno),
            'recomendacion' => $this->when($this->recomendacion != null, $this->recomendacion),
            
            'hghj'=> '<sdsd' */
            /* 'evaluaciones' => $this->estadosPerfil, */
            /* 'alumno' => new AlumnoShortResource($this->whenLoaded('alumno')),  */  
        ];
    }
}