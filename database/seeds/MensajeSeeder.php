<?php

use Illuminate\Database\Seeder;
use App\Model\Mensaje;

class MensajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensaje::create([
            'mensaje_mes' => "MENSAJE MES",
            'mensaje_mision' => "MISION",
            'mensaje_vision' => "VISION",
            'id_unayoe_perfil' => '1',
        ]); 
    }
}
