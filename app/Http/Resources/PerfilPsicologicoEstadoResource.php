<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PerfilPsicologicoEstadoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'anho' => $this->anho,
            'semestre' => $this->semestre,
            'estadosPerfil' => EstadoPerfilResource::collection($this->whenLoaded('estadosPerfil')),
            /* 'estadosPerfil' => $this->estadosPerfil, */
            /* 'evaluaciones' => $this->estadosPerfil->cuestionarioEvaluacion */
        ];
    }
}