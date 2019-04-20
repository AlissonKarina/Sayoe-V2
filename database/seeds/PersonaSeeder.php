<?php

use Illuminate\Database\Seeder;
use App\Persona;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i = 1 ; $i <= 20 ; $i ++){
            factory(Persona::class)->times(1)->create([
                'dni' => $i
            ]);
        }
    }
}
