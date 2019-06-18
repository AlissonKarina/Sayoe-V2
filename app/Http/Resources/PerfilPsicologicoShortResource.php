<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Helper\Helper;

class PerfilPsicologicoShortResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_perfil_psico' => $this->id_perfil,
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
            'nombre' => $this->alumno->persona->apellido_paterno." ".$this->alumno->persona->apellido_materno.", ".$this->alumno->persona->nombre,
            'codigo' => $this->alumno->codigo,
            'escuela' => $this->alumno->escuelaProfesional->nombre,
            'situacion' => $this->alumno->situacion,
            /* 'alumno' => new AlumnoShortResource($this->whenLoaded('alumno')),  */  
        ];
    }
}