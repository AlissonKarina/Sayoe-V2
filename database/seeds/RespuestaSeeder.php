<?php

use Illuminate\Database\Seeder;
use App\Respuesta;

class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($p = 1 ; $p <= 3 ; $p ++){
            for($i = 1 ; $i <= 20 ; $i ++){
                for($k = 1; $k<=2; $k ++){
                    Respuesta::create([
                        'valor' => "valor",
                        'descripcion' => "descripcion",
                        'id_pregunta' => $i,
                        'id_pefil_psico' => $p,
                    ]);
                }
            }
        }
    }
}
