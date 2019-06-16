<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Helper\Helper;

class PerfilPsicologicoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_perfil_psico' => $this->id_perfil,
            'id_cuest_eval' => $this->id_cuest_eval,
            'nombre' => $this->alumno->persona->apellido_paterno." ".$this->alumno->persona->apellido_materno.", ".$this->alumno->persona->nombre,
            'codigo' => $this->alumno->codigo,
            'ciclo' => $this->alumno->ciclo,
            'sexo' => $this->alumno->persona->sexo,
            'edad' => Helper::edad($this->alumno->persona->fecha_nacimiento),
            'escuela' => $this->alumno->escuelaProfesional->nombre,
            'situacion' => $this->alumno->situacion,
            /* 'evaluaciones' => $this->estadosPerfil, */
            /* 'alumno' => new AlumnoShortResource($this->whenLoaded('alumno')),  */  
        ];
    }
}