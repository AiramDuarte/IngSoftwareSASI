<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App/Alumnos::class, function (Faker $faker) {
    return [
        
        'nombre' => $faker->name,
        'semestre' => $faker->word,
        'porcentajeCarrera' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'disponiblidad' => $faker->boolean,
    ];
});
