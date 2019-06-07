<?php

use Illuminate\Database\Seeder;

class DepartamentosSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Departamento::create([
        	'nombre'	=>'Oficina de presidencia, RRHH',
        	'dsc'		=>'Descripcion'
        ]);

        App\Departamento::create([
            'nombre'    =>'Sala de reuniones',
            'dsc'       =>'Descripcion'
        ]);

        App\Departamento::create([
            'nombre'    =>'Secretaria de cámara',
            'dsc'       =>'Descripcion'
        ]);

        //factory(App\Departamento::class,29)->create();
    }
}
