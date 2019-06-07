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
        App\User::create([
        	'name'	    =>	'Jesús Rodríguez',
        	'email'	    =>	'sandino.rodriguez10@gmail.com',
        	'password'	=>	bcrypt('jsrf.5773'),
            'cargo_id'    => '1'
        ]);

        factory(App\User::class,29)->create();
    }
}
