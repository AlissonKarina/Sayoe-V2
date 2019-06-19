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
            'fecha_nacimiento'  => 'required|date_format:"Y-m-d"',
            'contrasenha'       => 'required',
            'ciclo'             => 'required|integer',
            'promedio'          => 'required|numeric',
            'total_creditos'    => 'required|integer',
            'situacion'         => 'required|in:R,O',
            'anho_ingreso'      => 'required|digits:4',
            'estado_permanencia'=> 'required|in:Activo,Inactivo',
            'id_escuela'        => 'required|integer|in:1,2'
        ];
    }
    
    public function messages()
    {
        return [
            //requerido
            'dni.required'                => 'El campo dni es obligatorio',
            'correo.required'             => 'El campo correo es obligatorio',
            'codigo.required'             => 'El campo codigo es obligatorio',
            'nombre.required'             => 'El campo nombre es obligatorio',
            'apellido_materno.required'   => 'El campo apellido_materno es obligatorio',
            'apellido_paterno.required'   => 'El campo apellido_paterno es obligatorio',
            'sexo.required'               => 'El campo sexo es obligatorio',
            'fecha_nacimiento.required'   => 'El campo fecha_nacimiento es obligatorio',
            'contrasenha.required'        => 'El campo contrasenha es obligatorio',
            'ciclo.required'              => 'El campo ciclo es obligatorio',
            'promedio.required'           => 'El campo promedio es obligatorio',
            'total_creditos.required'     => 'El campo total_creditos es obligatorio',
            'situacion.required'          => 'El campo situacion es obligatorio',
            'anho_ingreso.required'       => 'El campo anho_ingreso es obligatorio',
            'estado_permanencia.required' => 'El campo estado_permanencia es obligatorio',
            'id_escuela.required'         => 'El campo escuela profesional es obligatorio',
            //correo
            'correo.email'                => 'El campo correo debe tener el formato: "ejemplo@unmsm.edu.pe"',
            //unique
            'dni.unique'                  => 'El campo dni debe ser único',
            'correo.unique'               => 'El campo correo debe ser único',
            'codigo.unique'               => 'El campo codigo debe ser único',
            //especialidades
            'sexo.in'                     => 'El campo sexo solo acepta: F (Femenico) o M (Masculino)',
            'fecha_nacimiento.date_format'=> 'El campo fecha_nacimiento solo acepta el formato: 2019-11-05',
            'situacion.in'                => 'El campo situacion solo acepta: R (Regular) u O (Observado)',
            'estado_permanencia.in'       => 'El campo estado_permanencia solo acepta: Activo o Inactivo',
            'id_escuela.in'               => 'El campo id_escuela solo acepta 1 (Sistemas) o 2 (Software)',
            //numero
            'ciclo.integer'               => 'El campo ciclo debe ser un número entero',
            'promedio.numeric'            => 'El campo promedio debe ser un número',
            'total_creditos.integer'      => 'El campo total_creditos debe ser un número entero',
            'anho_ingreso.digits'         => 'El campo anho_ingreso debe ser un número entero y de 4 digitos',
        ];
    }
}