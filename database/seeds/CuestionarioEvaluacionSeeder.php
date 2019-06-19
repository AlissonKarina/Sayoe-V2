<?php

use Illuminate\Database\Seeder;
use App\Model\CuestionarioEvaluacion;

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
            'titulo_secundario' => "Evaluación 01",
            'autor' => "Luis Alberto Vicuña Peri ",
            'nro_preguntas'  => '55'
        ]);

        CuestionarioEvaluacion::create([
            'id' => 2,
            'titulo' => "Inventario de Depresion de Beck",
            'titulo_secundario' => "Evaluación 02",
            'autor' => "Aaron T. Beck, Robert A. Steer, Gregry K. Brown",
            'nro_preguntas' => '21'
        ]);

        /* CuestionarioEvaluacion::create([
            'id' => 3,
            'titulo' => "Inventario de Prueba",
            'titulo_secundario' => "Evaluación 03",
            'autor' => "Prueba",
            'nro_preguntas' => '2'
        ]); */

        /* CuestionarioEvaluacion::create([
            'id' => 4,
            'titulo' => "Cuestionario de Personalidad 16 PF",
            'titulo_secundario' => "Evaluación 04",
            'autor' => "R. B. Cattell",
            'nro_preguntas' => '187'
        ]); */

        /* CuestionarioEvaluacion::create([
            'id' => 5,
            'titulo' => "Inventario de Prueba para Habitos Estudio",
            'titulo_secundario' => "Evaluación 05",
            'autor' => "Prueba Habitos Estudio",
            'nro_preguntas' => '10'
        ]); */

        
    }
}
