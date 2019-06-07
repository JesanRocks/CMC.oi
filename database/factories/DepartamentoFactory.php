<?php

use Faker\Generator as Faker;

$factory->define(App\Departamento::class, function (Faker $faker) {
    $departamento = $faker->unique()->word(16);
    return [
        'nombre'	=> $departamento,
        'dsc'		=> $departamento,
    ];
});
