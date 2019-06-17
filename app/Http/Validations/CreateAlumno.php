<?php

namespace App\Http\Validations;

class CreateAlumno
{
    protected $data = null;

    function __construct($data)
    {
        $this->data = $data;
    }

    public function rules ()
    {
        return $rules = [
            'dni' => 'required|unique:personas',
            'correo' => 'required|email|unique:usuarios',
            'codigo'    => 'required|unique:alumnos',
        ];
    }

    public function message()
    {
        return $message = [
            'dni.unique' => 'dni',
            'correo.unique' => 'correo',
            'codigo.unique' => 'codigo',
        ];
    }

    public function validate()
    {
        $v = \Validator::make($this->data, $this->rules(), $this->message());
        return $v;
    }
}