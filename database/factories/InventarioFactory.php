<?php

use Faker\Generator as Faker;

$factory->define(App\Inventario::class, function (Faker $faker) {
    $inventario = $faker->unique()->sentence(1);
    return [
        'articulo_id'		=> rand(1,30),
		'cantidad'			=> rand(1,30),
		'codigo'			=> $inventario,
		'grupo_id'			=> rand(1,5),
		'independiente'		=> rand(1,2000),
		'serial'			=> $inventario,
		'modelo'			=> $inventario,
		'marca_id'			=> rand(1,30),
		'color_id'			=> rand(1,30),
		'incorp'			=> rand(1,5000),
		'desincorp'			=> rand(-2500,2500),
		'observacion'		=> $faker->text(30),
		'user_id'			=> rand(1,30), 
		'departamento_id'	=> rand(1,30)		
    ];
});
