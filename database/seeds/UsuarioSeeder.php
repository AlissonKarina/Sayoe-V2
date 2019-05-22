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
        Usuario::create([
            'correo' => 'sayoe@gmail.com',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '542687',
        ]);

        for($i = 1 ; $i <= 20 ; $i ++){
            Usuario::create([
                'correo' => 'alumno'.$i.'@gmail.com',
                'contrasenha' => app('hash')->make('12345'),
                'estado' => 1,
                'autenticado' => 0,
                'ultima_sesion' => '2012-02-03',
                'id_rol' => '128963',
            ]);
        }

        Usuario::create([
            'correo' => 'admin@gmail.com',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '123456',
        ]);
    }
} 
