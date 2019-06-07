<?php

use Illuminate\Database\Seeder;
use App\Model\Cita;

class CitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* for($i = 1 ; $i <= 20 ; $i ++){
            Cita::create([
                'asunto' => "Asunto ".$i,
                'fecha' => "2019-10-05",
                'descripcion' => "Descripcion ".$i,
                'estado' => '1',
                'codigoAlumno' => $i,
                'id_unayoe_perfil' => '1',                
            ]); 
        } */
    }
}
