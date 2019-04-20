<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Alumno::class, function (Faker\Generator $faker) {
    return [
        'codigo' =>'1',
        'ciclo' => '5',
        'situacion' => "O",
        'promedio' => '15.6',
        'anho_ingreso' => '2016',
        'estado_permanencia' => 'Activo',
        'total_creditos' => '82',
        'dni' => '1',
        'id_usuario' => '1',
        'id_escuela' => '1'
    ];
});
