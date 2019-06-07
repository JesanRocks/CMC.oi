<?php

use Faker\Generator as Faker;

$factory->define(App\Color::class, function (Faker $faker) {
    $color = $faker->unique()->word(7);
    return [
        'nombre'	=> $color,
        'dsc'		=> $color
    ];
});
