<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Helper\Helper;

class PerfilPsicologicoAlumnoShortResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_perfil_psico' => $this->id_perfil,
            "anho" => $this->anho,
            "semestre" => $this->semestre,
            'fecha_resuelto' => $this->when($this->fecha_resuelto != null, function () {
                $fecha_hora = Helper::fecha_hora($this->fecha_resuelto);
                return [
                    'fecha' => $fecha_hora['fecha'],
                    'hora' => $fecha_hora['hora'].' horas',
                ];
            }),
            'fecha_recomendacion' => $this->when($this->fecha_recomendacion != null, function () {
                $fecha_hora = Helper::fecha_hora($this->fecha_recomendacion);
                return [
                    'fecha' => $fecha_hora['fecha'],
                    'hora' => $fecha_hora['hora'].' horas',
                ];
            }),
            /* 'alumno' => new AlumnoShortResource($this->whenLoaded('alumno')),  */  
        ];
    }
}