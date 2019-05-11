<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Alumno::class, function (Faker $faker) {
    return [
        
        'nombre' => $faker->name,
        'semestre' => $faker->randomNumber($nbDigits = 1),
        'porcentajeCarrera' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 20),
        'disponiblidad' => $faker->boolean,
    ];
});
