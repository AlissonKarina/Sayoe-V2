<?php

use Illuminate\Database\Seeder;
use App\Pregunta;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i <= 60 ; $i ++){
            Pregunta::create([
                'pregunta' => "Pregunta ".$i,
                'id_cuest_eval' => 1, 
            ]); 
        }

        for($i = 1 ; $i <= 21 ; $i ++){
            Pregunta::create([
                'pregunta' => "Pregunta ".$i,
                'id_cuest_eval' => 2, 
            ]); 
        }

        for($i = 1 ; $i <= 120 ; $i ++){
            Pregunta::create([
                'pregunta' => "Pregunta ".$i,
                'id_cuest_eval' => 3, 
            ]); 
        }

        for($i = 1 ; $i <= 180 ; $i ++){
            Pregunta::create([
                'pregunta' => "Pregunta ".$i,
                'id_cuest_eval' => 4, 
            ]); 
        }

    }
}
