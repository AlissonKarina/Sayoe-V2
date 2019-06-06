<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstadoPerfilResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'evaa' => $this->cuestionarioEvaluacion,
            'evaluaciones' => CuestionarioEvaluacionShortResource::collection($this->whenLoaded('evaluaciones')),
        ];
    }
}