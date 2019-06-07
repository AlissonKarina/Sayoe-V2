<?php

use Illuminate\Database\Seeder;
use App\Model\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 2 ; $i <= 11 ; $i ++){
            Alumno::create([
                'codigo' => '162000'.$i,
                'ciclo' => $i,
                'situacion' => "O",
                'promedio' => '15.6',
                'anho_ingreso' => '2016',
                'estado_permanencia' => 'Activo',
                'total_creditos' => '82',
                'dni' => '987654'.$i,
                'id_usuario' => $i,
                'id_escuela' => '1'
            ]);
        }

        for($i = 12 ; $i <= 21 ; $i ++){
            Alumno::create([
                'codigo' => '162000'.$i,
                'ciclo' => '1',
                'situacion' => "R",
                'promedio' => '15.6',
                'anho_ingreso' => '2016',
                'estado_permanencia' => 'Activo',
                'total_creditos' => '82',
                'dni' => '987654'.$i,
                'id_usuario' => $i,
                'id_escuela' => '1'
            ]);
        }
    }
}
