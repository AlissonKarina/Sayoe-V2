<?php

use Illuminate\Database\Seeder;
use App\Estudiante;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i <= 10 ; $i ++){
            factory(Estudiante::class)->times(1)->create([
                'codigo' => $i,
                'dni' => $i,
                'id_usuario' => $i
            ]);
        }

        for($i = 11 ; $i <= 20 ; $i ++){
            factory(Estudiante::class)->times(1)->create([
                'codigo' => $i,
                'dni' => $i,
                'id_usuario' => $i,
                'situacion' => "R"
            ]);
        }
    }
}
