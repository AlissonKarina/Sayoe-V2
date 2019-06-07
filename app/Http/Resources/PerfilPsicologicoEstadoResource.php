<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PerfilPsicologicoEstadoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_perfil_psico' => $this->id,
            'estado' => $this->estado,
            'anho' => $this->anho,
            'semestre' => $this->semestre,
            'fecha_vencimiento' => $this->fecha_limite,
            'estadosPerfil' => EstadoPerfilResource::collection($this->whenLoaded('estadosPerfil')),
        ];
    }
}