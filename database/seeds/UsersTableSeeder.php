<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,29)->create();

        App\User::create([
        	'name'	=>	'Jesús Rodríguez',
        	'email'	=>	'sandino.rodriguez10@gmail.com',
        	'password'	=>	bcrypt('jsrf.5773')
        ]);
    }
}
