<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PerfilPsicologicoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_perfil_psico' => $this->id_perfil,
            'fecha_resuelto' => $this->fecha_resuelto,
            'nombre' => $this->alumno->persona->apellido_paterno." ".$this->alumno->persona->apellido_materno.", ".$this->alumno->persona->nombre,
            'codigo' => $this->alumno->codigo,
            'escuela' => $this->alumno->escuelaProfesional->nombre,
            'situacion' => $this->alumno->situacion
            /* 'alumno' => new AlumnoShortResource($this->whenLoaded('alumno')),  */  
        ];
    }
}