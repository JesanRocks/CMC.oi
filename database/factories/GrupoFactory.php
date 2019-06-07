<?php

use Faker\Generator as Faker;

$factory->define(App\Grupo::class, function (Faker $faker) {
    $grupo = $faker->unique()->word(7);
    return [
        'nombre'	=> $grupo,
        'dsc'		=> $grupo
    ];
});
