<?php

use Illuminate\Database\Seeder;
use App\Alternativa;

class AlternativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alternativa::create([
            'descripcion' =>"Siempre",
            'id_pregunta' => '1',
        ]);
       
        Alternativa::create([
            'descripcion' =>"Nunca",
            'id_pregunta' => '1',
        ]);

        Alternativa::create([
            'descripcion' =>"Siempre",
            'id_pregunta' => '2',
        ]);
       
        Alternativa::create([
            'descripcion' =>"Nunca",
            'id_pregunta' => '2',
        ]);

        Alternativa::create([
            'descripcion' =>"Siempre",
            'id_pregunta' => '3',
        ]);
       
        Alternativa::create([
            'descripcion' =>"Nunca",
            'id_pregunta' => '3',
        ]);

        Alternativa::create([
            'descripcion' =>"Siempre",
            'id_pregunta' => '4',
        ]);
       
        Alternativa::create([
            'descripcion' =>"Nunca",
            'id_pregunta' => '4',
        ]);

        Alternativa::create([
            'descripcion' =>"Siempre",
            'id_pregunta' => '5',
        ]);
       
        Alternativa::create([
            'descripcion' =>"Nunca",
            'id_pregunta' => '5',
        ]);
    }
}
