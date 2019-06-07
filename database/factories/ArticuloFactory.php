<?php

use Faker\Generator as Faker;

$factory->define(App\Articulo::class, function (Faker $faker) {
    $Articulo = $faker->unique()->word(5);
    return [
        'nombre'	=>$Articulo,
        'dsc'		=>$faker->text(100)
    ];
});
