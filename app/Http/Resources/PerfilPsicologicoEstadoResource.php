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
            'id_perfil_psico' => $this->estadosPerfil->id_perfil_psico,
            'evaluaciones' => $this->estadosPerfil->cuestionarioEvaluacion
        ];
    }
}