<?php

use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Cargo::create([
            'dsc' => 'Indefinido'
        ]);

        App\Cargo::create([
        	'dsc' => 'Administrador(a)'
        ]);

        App\Cargo::create([
        	'dsc' => 'Escritor(a) de contenido'
        ]);
        
        App\Cargo::create([
        	'dsc' => 'Registrador(a) de inventario'
        ]);            
    }
}
