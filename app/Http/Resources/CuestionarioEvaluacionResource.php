<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CuestionarioEvaluacionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'autor' => $this->autor,
            'nro_preguntas' => $this->nro_preguntas,
            'preguntas' => PreguntaResource::collection($this->whenLoaded('preguntas'))
        ];
    }
}