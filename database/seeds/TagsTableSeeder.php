<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tag::create([
        	'name'	=>	'Caicara de Maturín',
        	'slug'	=>	'caicara-de-maturin'
        ]);

        App\Tag::create([
        	'name'	=>	'Viento fresco',
        	'slug'	=>	'viento-fresco'
        ]);

        App\Tag::create([
        	'name'	=>	'Areo',
        	'slug'	=>	'areo'
        ]);

        App\Tag::create([
        	'name'	=>	'San Felix',
        	'slug'	=>	'san-felix'
        ]);


        factory(App\Tag::class,16)->create();
    }
}
