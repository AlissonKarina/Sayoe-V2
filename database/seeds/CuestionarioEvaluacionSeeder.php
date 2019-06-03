<?php

use Illuminate\Database\Seeder;
use App\CuestionarioEvaluacion;

class CuestionarioEvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CuestionarioEvaluacion::create([
            'id' => 1,
            'titulo' => "Inventario de Hábitos de Estudio CASM-85 Revisión 2017",
            'autor' => "Luis Alberto Vicuña Peri ",
            'nro_preguntas'  => '55'
        ]);

        CuestionarioEvaluacion::create([
            'id' => 2,
            'titulo' => "Inventario de Depresion de Beck",
            'autor' => "Aaron T. Beck, Robert A. Steer, Gregry K. Brown",
            'nro_preguntas' => '21'
        ]);
        
    }
}
