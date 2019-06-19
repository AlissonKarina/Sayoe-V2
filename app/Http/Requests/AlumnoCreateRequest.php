<?php

namespace App\Http\Requests;

use Urameshibr\Requests\FormRequest;

class AlumnoCreateRequest extends FormRequest
{
	public function authorize()
	{
		return true;
    }
    
    protected function validationData()
    {
        return $this->data;
    }

	public function rules()
	{
		return [
            'dni'               => 'required|unique:personas',
            'correo'            => 'required|email|unique:usuarios',
            'codigo'            => 'required|unique:alumnos',
            'nombre'            => 'required',
            'apellido_materno'  => 'required',
            'apellido_paterno'  => 'required',
            'sexo'              => 'required|in:F,M',
            'fecha_nacimiento'  => 'required|date_format:"Y-m-d',
            'contrasenha'       => 'required',
            'ciclo'             => 'required|numeric',
            'promedio'          => 'required|numeric',
            'total_creditos'    => 'required|numeric',
            'situacion'         => 'required|in:R,O',
            'anho_ingreso'      => 'required|numeric',
            'estado_permanencia'=> 'required|in:Activo,Inactivo',
            'id_escuela'        => 'required|numeric'
        ];
    }
    
    public function messages()
    {
        return [
            'dni.required' => 'El dni es obligatorio',
            'correo.required' => 'correo',
            'codigo.required' => 'codigo',
        ];
    }
}