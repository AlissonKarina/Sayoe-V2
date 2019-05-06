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
            'apellido_paterno' => "Apellido paterno",
            'apellido_materno' => "Apellido materno",
            'profesion' => 'Psicologa',
            'facebook' => 'https://www.facebook.com/LuisYauriMartinez',
            'celular' => "9854-5412",
            'wsp' => "9854-4522",
            'correo' => "sayoe-personal@gmail.com",
            'foto' => 'https://www.psicologabcn.es/wp-content/uploads/2019/01/psicologa-barcelona.jpg',
            'auto_descripcion' => "Autodescripcion",
            'id_usuario' => '1',
            'id_facultad' => '1',
        ]);
    }
}
