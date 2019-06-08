<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstadoPerfilResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'evaluacion '=> $this->when($this->estado == 0, function () {
                return [
                    'id_estado_perfil' => $this->id,
                    'id_cuest_eval' => $this->cuestionarioEvaluacion->id,
                    'titulo_secundario' => $this->cuestionarioEvaluacion->titulo_secundario,
                    'estado' => $this->estado,
                    'nro_preguntas' => $this->cuestionarioEvaluacion->nro_preguntas,
                ];
            })
            
        ];
    }
}