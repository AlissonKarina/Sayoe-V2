<?php

use Illuminate\Database\Seeder;
use App\Model\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([//1
            'correo' => 'araceli.campos@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '542687',
        ]);

        Usuario::create([//2
            'correo' => 'roquer.yupanqui@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//3
            'correo' => 'tania.escobedo@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);
        
        Usuario::create([//4
            'correo' => 'erik.guido@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//5
            'correo' => 'carlos.bonifaz@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//6
            'correo' => 'julio.romero@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//7
            'correo' => 'alberto.tataje@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//8
            'correo' => 'arez.rodriguez@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//9
            'correo' => 'ingrid.rodriguez@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//10
            'correo' => 'richar.quispe@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);
        
        Usuario::create([//11
            'correo' => 'alexander.ramos@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//12
            'correo' => 'juan.anchante@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//13
            'correo' => 'larry.barreto@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//14
            'correo' => 'kevin.castañeda@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//15
            'correo' => 'angel.gonzales@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//16
            'correo' => 'alberto.gutierrez@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//17
            'correo' => 'leonardo.quispe@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//18
            'correo' => 'neptali.reyes@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//19
            'correo' => 'tito.yanac@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//20
            'correo' => 'erick.avalos@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//21
            'correo' => 'luis.arteaga@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);

        Usuario::create([//22
            'correo' => 'admin@gmail.com',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '685429',
        ]);

        Usuario::create([//23
            'correo' => 'diego.chavez@unmsm.edu.pe',
            'contrasenha' => app('hash')->make('12345'),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2012-02-03',
            'id_rol' => '128963',
        ]);
  
        // Usuario::create([//24
        //     'correo' => 'diego.chavez@unmsm.edu.pe',
        //     'contrasenha' => app('hash')->make('12345'),
        //     'estado' => 1,
        //     'autenticado' => 0,
        //     'ultima_sesion' => '2012-02-03',
        //     'id_rol' => '128963',
        // ]);

        // Usuario::create([//25
        //     'correo' => 'martin.ayo@unmsm.edu.pe',
        //     'contrasenha' => app('hash')->make('12345'),
        //     'estado' => 1,
        //     'autenticado' => 0,
        //     'ultima_sesion' => '2012-02-03',
        //     'id_rol' => '128963',
        // ]);

        // Usuario::create([//26
        //     'correo' => 'luis.campos@unmsm.edu.pe',
        //     'contrasenha' => app('hash')->make('12345'),
        //     'estado' => 1,
        //     'autenticado' => 0,
        //     'ultima_sesion' => '2012-02-03',
        //     'id_rol' => '128963',
        // ]);
    }
} 
