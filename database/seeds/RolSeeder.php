<?php

use Illuminate\Database\Seeder;
use App\Model\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'id' => '542687',
            'nombre' => 'Unayoe'
        ]); 

        Rol::create([
            'id' => '128963',
            'nombre' => 'Estudiante'
        ]); 

        Rol::create([
            'id' => '685429',
            'nombre' => 'Administrador'
        ]); 
    }
}
