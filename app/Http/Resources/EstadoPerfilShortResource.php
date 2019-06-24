<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Helper\Helper;

class EstadoPerfilShortResource extends JsonResource
{
    public function toArray($request)
    {
        
        return [
            'id_estado_perfil' => $this->id,
            'id_cuest_eval' => $this->cuestionarioEvaluacion->id,
            'fecha_resuelto' => $this->when($this->fecha != null, function () {
                $fecha_hora = Helper::fecha_hora($this->fecha);
                return [
                    'fecha' => $fecha_hora['fecha'],
                    'hora' => $fecha_hora['hora'].' horas',
                ];
            }),
            'titulo_secundario' => $this->cuestionarioEvaluacion->titulo_secundario,
            'nro_preguntas' => $this->cuestionarioEvaluacion->nro_preguntas,
            'descripcion' => $this->when($this->descripcion != null , $this->resultadoInstantaneo()),
        ];
    }
}