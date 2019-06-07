<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CuestionarioEvaluacionShortResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'titulo_secundario' => $this->titulo_secundario,
            'nro_preguntas' => $this->nro_preguntas,
        ];
    }
}