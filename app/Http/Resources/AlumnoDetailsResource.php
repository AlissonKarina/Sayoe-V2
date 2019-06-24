<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Helper\Helper;

class AlumnoDetailsResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'datos_personales' => [
                'dni' => $this->persona->dni,
                'nombre' => $this->persona->nombre,
                'apellido_paterno' => $this->persona->apellido_paterno,
                'apellido_materno' => $this->persona->apellido_materno,
                'sexo' => $this->persona->sexo,
                'fecha_nacimiento' => $this->persona->fecha_nacimiento,
                'edad' => Helper::edad($this->persona->fecha_nacimiento),
                'foto' => $this->persona->foto,
                'telefono' => $this->persona->telefono,
                'celular' => $this->persona->celular,
                'direccion' => $this->persona->direccion,
                'correo_personal' => $this->persona->correo_personal,
            ],
            "datos_academicos" => [
                'codigo' => $this->codigo,
                'ciclo' => $this->ciclo,
                'situacion' => $this->ciclo,
                'promedio' => $this->ciclo,
                'anho_ingreso' => $this->ciclo,
                'estado_permanencia' => $this->ciclo,
                'total_creditos' => $this->ciclo,
                'escuela_profesional' => $this->escuelaProfesional->nombre,
                'facultad' => $this->escuelaProfesional->facultad->nombre
            ],
            "usuario" => [
                'correo_principal' => $this->usuario->correo,
            ],
        ];
    }
}