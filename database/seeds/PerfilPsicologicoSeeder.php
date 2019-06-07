<?php

use Illuminate\Database\Seeder;
use App\Model\PerfilPsicologico;

class PerfilPsicologicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* for($i = 1 ; $i <= 5 ; $i ++){
            PerfilPsicologico::create([
                'recomendacion' => "Recomendacion ".$i,
                'motivo' => "Motivo ".$i,
                'fecha_limite' => "05-06-2019",
                'estado' => '1',
                'codigoAlumno' => '162000'.$i
            ]);
        } */
    }
}
