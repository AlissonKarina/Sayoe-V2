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
            'estado_permanencia' => 'Activo',
            'total_creditos' => '115',
            'dni' => '43695481',
<<<<<<< HEAD
            'id_usuario' => '1',
=======
            'id_usuario' => '2',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200053',
            'ciclo' => '9',
            'situacion' => "O",
            'promedio' => '12.6',
            'anho_ingreso' => '2009',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '110',
            'dni' => '44603086',
<<<<<<< HEAD
            'id_usuario' => '2',
=======
            'id_usuario' => '3',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200054',
            'ciclo' => '10',
            'situacion' => "R",
            'promedio' => '11.2',
            'anho_ingreso' => '2009',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '92',
            'dni' => '70043237',
<<<<<<< HEAD
            'id_usuario' => '3',
=======
            'id_usuario' => '4',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200139',
            'ciclo' => '9',
            'situacion' => "R",
            'promedio' => '13.2',
            'anho_ingreso' => '2009',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '110',
            'dni' => '45912324',
<<<<<<< HEAD
            'id_usuario' => '4',
=======
            'id_usuario' => '5',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200154',
            'ciclo' => '8',
            'situacion' => "O",
            'promedio' => '11.2',
            'anho_ingreso' => '2009',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '92',
            'dni' => '46481023',
<<<<<<< HEAD
            'id_usuario' => '5',
=======
            'id_usuario' => '6',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200159',
            'ciclo' => '8',
            'situacion' => "O",
            'promedio' => '13.6',
            'anho_ingreso' => '2009',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '98',
            'dni' => '46519414',
<<<<<<< HEAD
            'id_usuario' => '6',
=======
            'id_usuario' => '7',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '09200229',
            'ciclo' => '8',
            'situacion' => "O",
            'promedio' => '13.8',
            'anho_ingreso' => '2009',
            'estado_permanencia' => 'No activo',
            'total_creditos' => '98',
            'dni' => '70078950',
<<<<<<< HEAD
            'id_usuario' => '7',
=======
            'id_usuario' => '8',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200064',
            'ciclo' => '8',
            'situacion' => "O",
            'promedio' => '13.8',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '98',
            'dni' => '45139174',
<<<<<<< HEAD
            'id_usuario' => '8',
=======
            'id_usuario' => '9',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200068',
            'ciclo' => '9',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '97',
            'dni' => '46887361',
<<<<<<< HEAD
            'id_usuario' => '9',
=======
            'id_usuario' => '10',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200071',
            'ciclo' => '6',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '85',
            'dni' => '47465301',
<<<<<<< HEAD
            'id_usuario' => '10',
=======
            'id_usuario' => '11',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200143',
            'ciclo' => '5',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '72',
            'dni' => '43386175',
<<<<<<< HEAD
            'id_usuario' => '11',
=======
            'id_usuario' => '12',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200144',
            'ciclo' => '7',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '79',
            'dni' => '43061789',
<<<<<<< HEAD
            'id_usuario' => '12',
=======
            'id_usuario' => '13',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200151',
            'ciclo' => '8',
            'situacion' => "R",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '76',
            'dni' => '47676481',
<<<<<<< HEAD
            'id_usuario' => '13',
=======
            'id_usuario' => '14',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200156',
            'ciclo' => '8',
            'situacion' => "R",
            'promedio' => '13.9',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'No activo',
            'total_creditos' => '73',
            'dni' => '46837299',
<<<<<<< HEAD
            'id_usuario' => '14',
=======
            'id_usuario' => '15',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200157',
            'ciclo' => '9',
            'situacion' => "O",
            'promedio' => '10.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '76',
            'dni' => '47573179',
<<<<<<< HEAD
            'id_usuario' => '15',
=======
            'id_usuario' => '16',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200166',
            'ciclo' => '7',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '46035060',
<<<<<<< HEAD
            'id_usuario' => '16',
=======
            'id_usuario' => '17',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);

        Alumno::create([
            'codigo' => '10200169',
            'ciclo' => '7',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '42255984',
<<<<<<< HEAD
            'id_usuario' => '17',
=======
            'id_usuario' => '18',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]);  
        
        Alumno::create([
            'codigo' => '10200176',
            'ciclo' => '7',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '70446446',
<<<<<<< HEAD
            'id_usuario' => '18',
=======
            'id_usuario' => '19',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '1'
        ]); 

        Alumno::create([
            'codigo' => '10200215',
            'ciclo' => '7',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '47753685',
<<<<<<< HEAD
            'id_usuario' => '19',
=======
            'id_usuario' => '20',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]); 

        Alumno::create([
<<<<<<< HEAD
            'codigo' => '16200097',
            'ciclo' => 'VII',
=======
            'codigo' => '16200200',
            'ciclo' => '7',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '9876542',
<<<<<<< HEAD
            'id_usuario' => '20',
            'id_escuela' => '2'
        ]); 

        Alumno::create([
            'codigo' => '10200220',
            'ciclo' => 'VII',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '72113937',
            'id_usuario' => '21',
            'id_escuela' => '1'
        ]); 

        Alumno::create([
            'codigo' => '10200234',
            'ciclo' => 'VII',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '71732618',
            'id_usuario' => '22',
            'id_escuela' => '1'
        ]); 

        Alumno::create([
            'codigo' => '11200030',
            'ciclo' => 'VII',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '47484081',
            'id_usuario' => '23',
            'id_escuela' => '1'
        ]); 

        Alumno::create([
            'codigo' => '11200032',
            'ciclo' => 'VII',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '72935196',
            'id_usuario' => '20',
            'id_escuela' => '2'
        ]); 

        Alumno::create([
            'codigo' => '11200033',
            'ciclo' => 'VII',
            'situacion' => "O",
            'promedio' => '13.1',
            'anho_ingreso' => '2010',
            'estado_permanencia' => 'Activo',
            'total_creditos' => '62',
            'dni' => '71523029',
            'id_usuario' => '20',
=======
            'id_usuario' => '21',
>>>>>>> 88282087438157981ad0b7ba319e3e07140f207e
            'id_escuela' => '2'
        ]); 
        
    }
}
