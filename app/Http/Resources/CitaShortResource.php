<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Helper\Helper;

class CitaShortResource extends JsonResource
{
    public function toArray($request)
    {
        $fecha_hora = Helper::fecha_hora($this->fecha);
        return [
            'id' => $this->id,
            'asunto' => $this->asunto,
            'fecha' => $fecha_hora['fecha'],
            'hora' => $fecha_hora['hora'].' horas',
            'estado' => $this->estado,
            'descripcion' => $this->descripcion, 
        ];
    }
} 