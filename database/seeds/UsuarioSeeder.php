<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Usuario::class)->times(1)->create([
            'correo' => 'sayoe@gmail.com',
            'id_rol' => '542687'
        ]);

        factory(Usuario::class)->times(1)->create([
            'correo' => 'alumno@gmail.com',
        ]);

        factory(Usuario::class)->times(19)->create();
    }
} 
