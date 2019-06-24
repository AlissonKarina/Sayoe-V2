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
        Alumno::create([
            'codigo' => '07200126',
            'ciclo' => '10',
            'situacion' => "R",
            'promedio' => '12.4',
            'anho_ingreso' => '2007',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '115',
            'dni' => '43695481',
            'id_usuario' => '2',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200053',
            'ciclo' => '9',
            'situacion' => "O",
            'promedio' => '12.6',
            'anho_ingreso' => '2009',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '110',
            'dni' => '44603086',
            'id_usuario' => '3',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200054',
            'ciclo' => '10',
            'situacion' => "R",
            'promedio' => '11.2',
            'anho_ingreso' => '2009',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '92',
            'dni' => '70043237',
            'id_usuario' => '4',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200139',
            'ciclo' => '9',
            'situacion' => "R",
            'promedio' => '13.2',
            'anho_ingreso' => '2009',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '110',
            'dni' => '45912324',
            'id_usuario' => '5',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200154',
            'ciclo' => '8',
            'situacion' => "O",
            'promedio' => '11.2',
            'anho_ingreso' => '2009',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '92',
            'dni' => '46481023',
            'id_usuario' => '6',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200159',
            'ciclo' => '8',
            'situacion' => "O",
            'promedio' => '13.6',
            'anho_ingreso' => '2009',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '98',
            'dni' => '46519414',
            'id_usuario' => '7',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200229',
            'ciclo' => '8',
            'situacion' => "O",
            'promedio' => '13.8',
            'anho_ingreso' => '2009',
            'estado_permanencia' => strtoupper('No activo'),
            'total_creditos' => '98',
            'dni' => '70078950',
            'id_usuario' => '8',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200064',
            'ciclo' => '8',
            'situacion' => "O",
            'promedio' => '13.8',
            'anho_ingreso' => '2010',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '98',
            'dni' => '45139174',
            'id_usuario' => '9',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200068',
            'ciclo' => '9',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '97',
            'dni' => '46887361',
            'id_usuario' => '10',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200071',
            'ciclo' => '6',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '85',
            'dni' => '47465301',
            'id_usuario' => '11',
            'id_escuela' => '1'
        ]);

        Alumno::create([
            'codigo' => '10200143',
            'ciclo' => '5',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '72',
            'dni' => '43386175',
            'id_usuario' => '12',
            'id_escuela' => '1'
        ]);

        Alumno::create([
            'codigo' => '10200144',
            'ciclo' => '7',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '79',
            'dni' => '43061789',
            'id_usuario' => '13',
            'id_escuela' => '1'
        ]);

        Alumno::create([
            'codigo' => '10200151',
            'ciclo' => '8',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '76',
            'dni' => '47676481',
            'id_usuario' => '14',
            'id_escuela' => '1'
        ]);

        Alumno::create([
            'codigo' => '10200156',
            'ciclo' => '8',
            'situacion' => "R",
            'promedio' => '13.9',
            'anho_ingreso' => '2010',
            'estado_permanencia' => strtoupper('No activo'),
            'total_creditos' => '73',
            'dni' => '46837299',
            'id_usuario' => '15',
            'id_escuela' => '1'
        ]);

        Alumno::create([
            'codigo' => '10200157',
            'ciclo' => '9',
            'situacion' => "O",
            'promedio' => '10.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '76',
            'dni' => '47573179',
            'id_usuario' => '16',
            'id_escuela' => '1'
        ]);

        Alumno::create([
            'codigo' => '10200166',
            'ciclo' => '7',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '62',
            'dni' => '46035060',
            'id_usuario' => '17',
            'id_escuela' => '1'
        ]);

        Alumno::create([
            'codigo' => '10200169',
            'ciclo' => '7',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '62',
            'dni' => '42255984',
            'id_usuario' => '18',
            'id_escuela' => '1'
        ]);  
        
        Alumno::create([
            'codigo' => '10200176',
            'ciclo' => '7',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '62',
            'dni' => '70446446',
            'id_usuario' => '19',
            'id_escuela' => '1'
        ]); 

        Alumno::create([
            'codigo' => '10200215',
            'ciclo' => '7',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '62',
            'dni' => '47753685',
            'id_usuario' => '20',
            'id_escuela' => '1'
        ]); 

        Alumno::create([
            'codigo' => '10200220',
            'ciclo' => '7',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '62',
            'dni' => '72113937',
            'id_usuario' => '21',
            'id_escuela' => '1'
        ]); 

        Alumno::create([
            'codigo' => '10200234',
            'ciclo' => '7',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => strtoupper('Activo'),
            'total_creditos' => '62',
            'dni' => '71732618',
            'id_usuario' => '23',
            'id_escuela' => '1'
        ]);
    }
}
