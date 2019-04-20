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

$factory->define(App\Persona::class, function (Faker\Generator $faker) {
    return [
        'dni' => $faker->randomNumber($nbDigits = 7),
        'nombre' => $faker->name,
        'apellido_paterno' => $faker->name,
        'apellido_materno' => $faker->name,
        'sexo' => '1',
        'fecha_nacimiento' => $faker->date(),
        'telefono' => $faker->randomNumber($nbDigits = 7),
        'celular' => $faker->randomNumber($nbDigits = 9),
        'direccion' => $faker->sentence(3, false),
        'correo_personal' => $faker->unique()->safeEmail
    ];
});
