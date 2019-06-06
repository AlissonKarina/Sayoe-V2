<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstadoPerfilResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            /* 'evaa' => $this->cuestionarioEvaluacion, */
            'cuestionarioEvaluacion' => CuestionarioEvaluacionShortResource::collection($this->whenLoaded('cuestionarioEvaluacion')),
        ];
    }
}