<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Helper\Helper;

class CitaResource extends JsonResource
{
    public function toArray($request)
    {
        $fecha_hora = Helper::fecha_hora($this->fecha);
        return [
            'alumno' => $this->alumno->persona->apellido_paterno." ".$this->alumno->persona->apellido_materno.", ".$this->alumno->persona->nombre,
            'estado' => $this->estado,
            'asunto' => $this->asunto,
            'fecha' => $fecha_hora['fecha'],
            'hora' => $fecha_hora['hora'].' horas',
            'descripcion' => $this->descripcion,           
            
        ];
    }
} 