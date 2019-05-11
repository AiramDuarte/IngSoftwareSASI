<?php


use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Curso::class, function (Faker $faker) {
    return [
        //
        'horario' => $faker->word,
        'nivel' => $faker->word,
        'capacidad' => $faker->numberBetween($min = 10, $max = 60),
    ];
});
