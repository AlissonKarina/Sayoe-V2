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
            'ciclo' => 'X',
            'situacion' => "R",
            'promedio' => '12.4',
            'anho_ingreso' => '2007',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '115',
            'dni' => '43695481',
            'id_usuario' => '1000000',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200053',
            'ciclo' => 'IX',
            'situacion' => "O",
            'promedio' => '12.6',
            'anho_ingreso' => '2009',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '110',
            'dni' => '44603086',
            'id_usuario' => '1000001',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200054',
            'ciclo' => 'X',
            'situacion' => "R",
            'promedio' => '11.2',
            'anho_ingreso' => '2009',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '92',
            'dni' => '70043237',
            'id_usuario' => '1000002',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200139',
            'ciclo' => 'IX',
            'situacion' => "R",
            'promedio' => '13.2',
            'anho_ingreso' => '2009',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '110',
            'dni' => '45912324',
            'id_usuario' => '1000003',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200154',
            'ciclo' => 'VIII',
            'situacion' => "O",
            'promedio' => '11.2',
            'anho_ingreso' => '2009',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '92',
            'dni' => '46481023',
            'id_usuario' => '1000004',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200159',
            'ciclo' => 'VIII',
            'situacion' => "O",
            'promedio' => '13.6',
            'anho_ingreso' => '2009',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '98',
            'dni' => '46519414',
            'id_usuario' => '1000005',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200229',
            'ciclo' => 'VIII',
            'situacion' => "O",
            'promedio' => '13.8',
            'anho_ingreso' => '2009',
            'estado_permanencia' => 'No activo',
            'total_creditos' => '98',
            'dni' => '70078950',
            'id_usuario' => '1000006',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200064',
            'ciclo' => 'VIII',
            'situacion' => "O",
            'promedio' => '13.8',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '98',
            'dni' => '45139174',
            'id_usuario' => '1000007',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200068',
            'ciclo' => 'IX',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '97',
            'dni' => '46887361',
            'id_usuario' => '1000008',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200071',
            'ciclo' => 'VIII',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '85',
            'dni' => '47465301',
            'id_usuario' => '1000009',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200143',
            'ciclo' => 'VIII',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '72',
            'dni' => '43386175',
            'id_usuario' => '1000010',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200144',
            'ciclo' => 'VIII',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '79',
            'dni' => '43061789',
            'id_usuario' => '1000011',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200151',
            'ciclo' => 'VIII',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '76',
            'dni' => '47676481',
            'id_usuario' => '1000012',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200156',
            'ciclo' => 'VIII',
            'situacion' => "R",
            'promedio' => '13.9',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'No activo',
            'total_creditos' => '73',
            'dni' => '46837299',
            'id_usuario' => '1000013',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200157',
            'ciclo' => 'VIII',
            'situacion' => "O",
            'promedio' => '10.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '76',
            'dni' => '47573179',
            'id_usuario' => '1000014',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200166',
            'ciclo' => 'VII',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '46035060',
            'id_usuario' => '1000015',
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200169',
            'ciclo' => 'VII',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '42255984',
            'id_usuario' => '1000016',
            'id_escuela' => '2'
        ]);  
        
        Alumno::create([
            'codigo' => '10200176',
            'ciclo' => 'VII',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '70446446',
            'id_usuario' => '1000017',
            'id_escuela' => '1'
        ]); 

        Alumno::create([
            'codigo' => '10200215',
            'ciclo' => 'VII',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '47753685',
            'id_usuario' => '1000018',
            'id_escuela' => '2'
        ]); 

        Alumno::create([
            'codigo' => '16200200',
            'ciclo' => 'VII',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '9876542',
            'id_usuario' => '1',
            'id_escuela' => '2'
        ]); 
        
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
    }
}
