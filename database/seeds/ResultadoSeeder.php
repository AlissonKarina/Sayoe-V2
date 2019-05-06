<?php

use Illuminate\Database\Seeder;
use App\Resultado;

class ResultadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 4; $i++){
            Resultado::create([
                'descripcion' => "Descricion ".$i,
                'valor' => $i+2,
                'id_cuest_eval' => $i, 
            ]); 
        }
    }
}
