<?php

use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Marca::create([
        	'nombre'	=>'No posee marca',
        	'dsc'		=>'Este articulo no tiene la marca definida'
        ]);

        factory(App\Marca::class,29)->create();
    }
}
