<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstadoPerfilResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->cuestionarioEvaluacion->id,
            'titulo_secundario' => $this->cuestionarioEvaluacion->titulo_secundario,
            'nro_preguntas' => $this->cuestionarioEvaluacion->nro_preguntas,
        ];
    }
}