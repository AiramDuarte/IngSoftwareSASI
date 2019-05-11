<?php

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
    ];
});
