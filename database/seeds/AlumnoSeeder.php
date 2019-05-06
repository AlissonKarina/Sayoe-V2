<?php

use Illuminate\Database\Seeder;
use App\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i <= 10 ; $i ++){
            Alumno::create([
                'codigo' => $i,
                'ciclo' => $i,
                'situacion' => "O",
                'promedio' => '15.6',
                'anho_ingreso' => '2016',
                'estado_permanencia' => 'Activo',
                'total_creditos' => '82',
                'dni' => $i,
                'id_usuario' => $i,
                'id_escuela' => '1'
            ]);
        }

        for($i = 11 ; $i <= 20 ; $i ++){
            Alumno::create([
                'codigo' => $i,
                'ciclo' => '1',
                'situacion' => "R",
                'promedio' => '15.6',
                'anho_ingreso' => '2016',
                'estado_permanencia' => 'Activo',
                'total_creditos' => '82',
                'dni' => $i,
                'id_usuario' => $i,
                'id_escuela' => '1'
            ]);
        }
    }
}
