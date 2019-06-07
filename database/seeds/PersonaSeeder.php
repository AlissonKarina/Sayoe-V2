<?php

use Illuminate\Database\Seeder;
use App\Model\Persona;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([
                'dni' => '9876542',
                'nombre' => "Luis David ",
                'apellido_paterno' => "Yauri",
                'apellido_materno' => "Martinez",
                'sexo' => '0',
                'fecha_nacimiento' => "2001-10-05",
                'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
                'telefono' => "8888-888",
                'celular' => "9999-9999",
                'direccion' => "Miraflores ",
                'correo_personal' => "david.yauri"."@gamil.com",

        ]);
        
        for($i = 3 ; $i <= 10 ; $i ++){
            Persona::create([
                'dni' => '987654'.$i,
                'nombre' => "nombre ".$i,
                'apellido_paterno' => "apellido paterno ".$i,
                'apellido_materno' => "apellido materno ".$i,
                'sexo' => '0',
                'fecha_nacimiento' => "2001-10-05",
                'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
                'telefono' => "8888-888",
                'celular' => "9999-9999",
                'direccion' => "Direccion ".$i,
                'correo_personal' => "personal".$i."@gamil.com",
            ]);
        }

        for($i = 11 ; $i <= 21; $i ++){
            Persona::create([
                'dni' => '987654'.$i,
                'nombre' => "nombre ".$i,
                'apellido_paterno' => "apellido paterno ".$i,
                'apellido_materno' => "apellido materno ".$i,
                'sexo' => '1',
                'fecha_nacimiento' => "2000-10-05",
                'foto' => 'http://blogs.lanacion.com.ar/merle/files/2009/03/pn_2399_image_031.jpg',
                'telefono' => "8888-888",
                'celular' => "9999-9999",
                'direccion' => "Direccion ".$i,
                'correo_personal' => "personal".$i."@gamil.com",
            ]);
        }
    }
}
