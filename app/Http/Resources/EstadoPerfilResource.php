<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstadoPerfilResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_cuest_eval' => $this->cuestionarioEvaluacion->id,
            /* 'nro_preguntas' => $this->cuestionarioEvaluacion->nro_preguntas, */
            'descripcion' => $this->when($this->descripcion != null, $this->descripcion),
        ];
    }
}