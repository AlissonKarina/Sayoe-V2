<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Helper\Helper;

class EstadoPerfilResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_cuest_eval' => $this->cuestionarioEvaluacion->id,
            'titulo_evaluacion' => $this->cuestionarioEvaluacion->titulo,
            'estado' => $this->estado,
            'fecha_resuelto' => $this->when($this->fecha != null, function () {
                $fecha_hora = Helper::fecha_hora($this->fecha);
                return [
                    'fecha' => $fecha_hora['fecha'],
                    'hora' => $fecha_hora['hora'].' horas',
                ];
            }),
            /* 'nro_preguntas' => $this->cuestionarioEvaluacion->nro_preguntas, */
            'descripcion' => $this->when($this->descripcion != null, $this->descripcion),
            
        ];
    }
}