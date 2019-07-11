<?php

use Illuminate\Database\Seeder;

class GruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Grupo::create([
        	'codigo'	=>'No posee grupo',
        	'dsc'		=>'Este articulo no tiene el grupo definido'
        ]);

        App\Grupo::create([
            'codigo'    =>'14000',
            'dsc'       =>'Maquinaria y demás equipos de construcción, campo, industria y taller'
        ]);

        App\Grupo::create([
            'codigo'    =>'15000',
            'dsc'       =>'Equipos de transporte, tracción y elevación'
        ]);

        App\Grupo::create([
            'codigo'    =>'16000',
            'dsc'       =>'Equipos de comunicaciones y de señalamiento'
        ]);

        App\Grupo::create([
            'codigo'    =>'17000',
            'dsc'       =>'Equipos médicos - quirúrgicos, dentales y veterinarios'
        ]);

        App\Grupo::create([
            'codigo'    =>'18000',
            'dsc'       =>'Equipos científicos, religiosos, de enseñanza y recreación'
        ]);

        App\Grupo::create([
            'codigo'    =>'19000',
            'dsc'       =>'Equipos de defensa y seguridad del Estado'
        ]);

        App\Grupo::create([
            'codigo'    =>'20000',
            'dsc'       =>'Máquinas, muebles y demás equipos de oficina y de alojamiento'
        ]);

        App\Grupo::create([
            'codigo'    =>'21000',
            'dsc'       =>'Semovientes'
        ]);

        //factory(App\Grupo::class,28)->create();
    }
}
