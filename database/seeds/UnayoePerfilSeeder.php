<?php

use Illuminate\Database\Seeder;
use App\Model\UnayoePerfil;

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
            'nombre' => strtoupper("Araceli"),
            'apellido_paterno' => strtoupper("Campos"),
            'apellido_materno' => strtoupper("Sevallo"),
            'sexo' => "F",
            'profesion' => strtoupper('Psicologa'),
            'facebook' => 'https://www.facebook.com/LuisYauriMartinez',
            'celular' => "9854-45202",
            'wsp' => "9854-45202",
            'correo' => "araceli.campos@unmsm.edu.pe",
            'foto' => 'https://www.psicologabcn.es/wp-content/uploads/2019/01/psicologa-barcelona.jpg',
            'auto_descripcion' => "Es una persona responsable, muy entusiasmada, muestra una actitud de respeto antes todos.",
            'id_usuario' => '1',
            'id_facultad' => '1',
        ]);

        UnayoePerfil::create([
            'nombre' => strtoupper("Mariana"),
            'apellido_paterno' => strtoupper("Soto"),
            'apellido_materno' => strtoupper("Chirinos"),
            'sexo' => "1",
            'profesion' => strtoupper('Psicologa'),
            'facebook' => 'https://www.facebook.com/LuisYauriMartinez',
            'celular' => "9854-12543",
            'wsp' => "9854-12543",
            'correo' => "mariana.soto@unmsm.edu.pe",
            'foto' => 'https://www.psicologabcn.es/wp-content/uploads/2019/01/psicologa-barcelona.jpg',
            'auto_descripcion' => "Es una persona responsable, con muchas ganas de aprender.",
            'id_usuario' => '22',
            'id_facultad' => '1',
        ]);
    }
}
