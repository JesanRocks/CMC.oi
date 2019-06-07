<?php

use Faker\Generator as Faker;

$factory->define(App\Marca::class, function (Faker $faker) {
    $marca = $faker->unique()->word(7);
    return [
        'nombre'	=> $marca,
        'dsc'		=> $marca
    ];
});
