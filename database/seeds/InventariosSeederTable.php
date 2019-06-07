<?php

use Illuminate\Database\Seeder;

class InventariosSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Inventario::create([
	        'articulo_id' 		=>'1', 
			'cantidad' 			=>'1', 
			'codigo' 			=>'CMMC-00000-0000', 
			'grupo_id' 			=>'2', 
			'independiente'	 	=>'0000', 
			'serial' 			=>'SERIAL-123', 
			'modelo' 			=>'No tiene', 
			'marca_id' 			=>'1', 
			'color_id' 			=>'1', 
			'incorp' 			=>'1000', 
			'desincorp' 		=>'100', 
			'observacion' 		=>'Ninguna', 
			'user_id'			=>'1',  
			'departamento_id' 	=>'1', 
        ]);

        //factory(App\Inventario::class,29)->create();
    }
}
