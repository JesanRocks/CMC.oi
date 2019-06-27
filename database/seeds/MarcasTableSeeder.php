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
        	'nombre'	=>' Desconocida',
        	'dsc'		=>'Este articulo no tiene la marca definida'
        ]);

        App\Marca::create([
            'nombre'    =>'Acer',
            'dsc'       =>''
        ]);

        App\Marca::create([
            'nombre'    =>'Asus',
            'dsc'       =>''
        ]);

        App\Marca::create([
            'nombre'    =>'Compaq',
            'dsc'       =>''
        ]);

        App\Marca::create([
            'nombre'    =>'Dell',
            'dsc'       =>''
        ]);

        App\Marca::create([
            'nombre'    =>'Huawei',
            'dsc'       =>''
        ]);

        App\Marca::create([
            'nombre'    =>'HP',
            'dsc'       =>''
        ]);

        App\Marca::create([
            'nombre'    =>'IBM',
            'dsc'       =>''
        ]);
        
        App\Marca::create([
            'nombre'    =>'Intel ',
            'dsc'       =>''
        ]);

        App\Marca::create([
            'nombre'    =>'Lenovo',
            'dsc'       =>''
        ]);
        
        App\Marca::create([
            'nombre'    =>'LG',
            'dsc'       =>''
        ]);

        App\Marca::create([
            'nombre'    =>'Panasonic',
            'dsc'       =>''
        ]);

        App\Marca::create([
            'nombre'    =>'Samsung',
            'dsc'       =>''
        ]);
        
        App\Marca::create([
            'nombre'    =>'Sony',
            'dsc'       =>''
        ]);

        App\Marca::create([
            'nombre'    =>'Toshiba ',
            'dsc'       =>''
        ]);
       
        App\Marca::create([
            'nombre'    =>'ZTE',
            'dsc'       =>''
        ]);

/*         App\Marca::create([
            'nombre'    =>'',
            'dsc'       =>''
        ]);
        
        App\Marca::create([
            'nombre'    =>'',
            'dsc'       =>''
        ]);

        factory(App\Marca::class,29)->create();
*/
    }
}
