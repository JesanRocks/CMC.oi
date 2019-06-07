<?php

use Illuminate\Database\Seeder;

class ColoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Color::create([
        	'nombre'	=>'No posee color',
        	'dsc'		=>'Este articulo no tiene el color definido'
        ]);

        App\Color::create([
            'nombre'    =>  'NEGRO',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'AZUL',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'PALO ROSA',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'NARANJA',
            'dsc'       =>  ''
        ]);
                
        App\Color::create([
            'nombre'    =>  'VERDE',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'BEIGE',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'CROMÁTICO',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'VINOTINTO',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'GRIS / NEGRO',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  ' PLATEADO',
            'dsc'       =>  ''
        ]);
                
        App\Color::create([
            'nombre'    =>  'BEIGE AUSTRALIA',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'PLATEADO FERROSO ',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'PERLA',
            'dsc'       =>  ''
        ]);
                
        App\Color::create([
            'nombre'    =>  'BEIGE OLIMPICO',
            'dsc'       =>  ''
        ]);
        
        App\Color::create([
            'nombre'    =>  'ARENA METALIZADO',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'PLATA',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'ROJO',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'AMARILLO ',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'BEIGE DUNA',
            'dsc'       =>  ''
        ]);
                
        App\Color::create([
            'nombre'    =>  'MARRÓN / NEGRO',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'AZUL / BEIGE ',
            'dsc'       =>  ''
        ]);
                
        App\Color::create([
            'nombre'    =>  'MARRÓN / BEIGE',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'VERDE ESMERALDA',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'PLATA CLARO',
            'dsc'       =>  ''
        ]);
                
        App\Color::create([
            'nombre'    =>  'PLATEADO BRILLANTE',
            'dsc'       =>  ''
        ]);                                

        App\Color::create([
            'nombre'    =>  'MARRÓN PARDILLO BICAPA',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'GRIS PALMERA',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  ' DORADO ',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'MADERA NATURAL',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'NEGRO/AMARILLO MOSTAZA',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'MARRON ',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'BLANCO',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'GRIS',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'AZUL / GRIS ',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'AZUL / NEGRO',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'ACERO',
            'dsc'       =>  ''
        ]);
                
        App\Color::create([
            'nombre'    =>  'OTRO COLOR',
            'dsc'       =>  ''
        ]);

        //factory(App\Color::class,29)->create();
    }
}
