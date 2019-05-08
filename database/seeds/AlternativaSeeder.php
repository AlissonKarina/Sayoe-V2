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
        for($i = 1 ; $i <= 381 ; $i ++){
            for($e = 1; $e <= 5; $e ++){
                Alternativa::create([
                'descripcion' =>"Descricion ".$e,
                'id_pregunta' => $i,
                ]);
            }
        }

        
    }
}
