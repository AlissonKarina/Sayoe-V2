<?php

use Illuminate\Database\Seeder;
use App\UnayoePerfil;

class UnayoePerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnayoePerfil::create([
            'id' => '1',
            'nombre' => "Araceli",
            'apellido_paterno' => "Campos",
            'apellido_materno' => "Sevallo",
            'profesion' => 'Psicologa',
            'facebook' => 'https://www.facebook.com/LuisYauriMartinez',
            'celular' => "9854-45202",
            'wsp' => "9854-45202",
            'correo' => "araceli_campos@gmail.com",
            'foto' => 'https://www.psicologabcn.es/wp-content/uploads/2019/01/psicologa-barcelona.jpg',
            'auto_descripcion' => "es una persona responsable, muy entusiasmada, muestra una actitud de respeto antes todos.",
            'id_usuario' => '1',
            'id_facultad' => '1',
        ]);

        UnayoePerfil::create([
            'id' => '2',
            'nombre' => "Mariana",
            'apellido_paterno' => "Soto",
            'apellido_materno' => "Chirinos",
            'profesion' => 'Psicologa',
            'facebook' => 'https://www.facebook.com/LuisYauriMartinez',
            'celular' => "9854-12543",
            'wsp' => "9854-12543",
            'correo' => "mariana@gmail.com",
            'foto' => 'https://www.psicologabcn.es/wp-content/uploads/2019/01/psicologa-barcelona.jpg',
            'auto_descripcion' => "Es una persona Responsable, con muchas ganas de aprender.",
            'id_usuario' => '22',
            'id_facultad' => '1',
        ]);
    }
}
