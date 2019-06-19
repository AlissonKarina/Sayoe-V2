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
            'sexo'              => 'required',
            'fecha_nacimiento'  => 'required',
            'contrasenha'       => 'required',
            'ciclo'             => 'required',
            'promedio'          => 'required',
            'total_creditos'    => 'required',
            'situacion'         => 'required',
            'anho_ingreso'      => 'required',
            'estado_permanencia'=> 'required',
            'id_escuela'        => 'required'
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