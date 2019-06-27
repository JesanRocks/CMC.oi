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
            'nombre'    =>' No posee color',
            'dsc'       =>'Este articulo no tiene el color definido'
        ]);

        App\Color::create([
            'nombre'    =>  'Negro',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Azul',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Palo Rosa',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Naranja',
            'dsc'       =>  ''
        ]);
                
        App\Color::create([
            'nombre'    =>  'Verde',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Beige',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Cromático',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Vinotinto',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Gris / Negro',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Plateado',
            'dsc'       =>  ''
        ]);
                
        App\Color::create([
            'nombre'    =>  'Beige Australia',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Plateado Ferroso ',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Perla',
            'dsc'       =>  ''
        ]);
                
        App\Color::create([
            'nombre'    =>  'Beige Olimpico',
            'dsc'       =>  ''
        ]);
        
        App\Color::create([
            'nombre'    =>  'Arena Metalizado',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Plata',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Rojo',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Amarillo ',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Beige Duna',
            'dsc'       =>  ''
        ]);
                
        App\Color::create([
            'nombre'    =>  'Marrón / Negro',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Azul / Beige ',
            'dsc'       =>  ''
        ]);
                
        App\Color::create([
            'nombre'    =>  'Marrón / Beige',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Verde Esmeralda',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Plata Claro',
            'dsc'       =>  ''
        ]);
                
        App\Color::create([
            'nombre'    =>  'Plateado Brillante',
            'dsc'       =>  ''
        ]);                                

        App\Color::create([
            'nombre'    =>  'Marrón Pardillo Bicapa',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Gris Palmera',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Dorado ',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Madera Natural',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Negro / Amarillo Mostaza',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Marron ',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Blanco',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Gris',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Azul / Gris ',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Azul / Negro',
            'dsc'       =>  ''
        ]);

        App\Color::create([
            'nombre'    =>  'Acero',
            'dsc'       =>  ''
        ]);
                
        App\Color::create([
            'nombre'    =>  'Otro Color',
            'dsc'       =>  ''
        ]);

        //factory(App\Color::class,29)->create();
    }
}