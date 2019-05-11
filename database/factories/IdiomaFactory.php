<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Idioma::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'noCursos' => $faker->numberBetween($min = 10, $max = 60),
    ];
});
