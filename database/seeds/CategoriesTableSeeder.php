<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\Category::create([
        	'name'	=>	'Noticias',
        	'slug'	=>	'noticias',
        	'body'	=>	'Noticias de acerca de la Cámara Municipal'
        ]);

        App\Category::create([
        	'name'	=>	'Eventos',
        	'slug'	=>	'eventos',
        	'body'	=>	'Eventos de la Cámara Municipal del Municipio Cedeño'
        ]);

        App\Category::create([
        	'name'	=>	'Ordenanzas',
        	'slug'	=>	'ordenanzas',
        	'body'	=>	'Ordenanzas de la Cámara Municipal del Municipio Cedeño'
        ]);        

        factory(App\Category::class,17)->create();
    }
}