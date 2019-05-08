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
            for($i = 1; $i <= 5; $i ++){
                Alternativa::create([
                'descripcion' =>"Descricion ".$i,
                'id_pregunta' => $i,
                ]);
            }
        }

        
    }
}
