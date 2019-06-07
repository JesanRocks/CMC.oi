<?php

use Illuminate\Database\Seeder;

class ArticulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\Articulo::create([
        	'codigo'	    =>  '16010-0029',
        	'dsc'		    =>  'Teléfonos',
            'subgrupo_id'   =>  '17'
        ]);

        App\Articulo::create([
            'codigo'        =>  '18030-0001',
            'dsc'           =>  'Cuadros',
            'subgrupo_id'   =>  '26'
        ]);
        
        App\Articulo::create([
        	'codigo'	    =>  '20010-0001',
        	'dsc'		    =>  'Acondicionadores de aire',
            'subgrupo_id'   =>  '33'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20010-0004',
            'dsc'           =>  'Archivadores de gavetas',
            'subgrupo_id'   =>  '33'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20010-0005',
            'dsc'           =>  'Archivadores de puertas',
            'subgrupo_id'   =>  '33'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20010-0033',
            'dsc'           =>  'Enfriadores de agua',
            'subgrupo_id'   =>  '33'
        ]);
        
        App\Articulo::create([
            'codigo'        =>  '20010-0037',
            'dsc'           =>  'Escritorios',
            'subgrupo_id'   =>  '33'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20010-0041',
            'dsc'           =>  'Estantes',
            'subgrupo_id'   =>  '33'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20010-0046',
            'dsc'           =>  'Fotocopiadoras',
            'subgrupo_id'   =>  '33'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20010-0047',
            'dsc'           =>  'Gabinetes',
            'subgrupo_id'   =>  '33'
        ]);
        
        App\Articulo::create([
            'codigo'        =>  '20010-0093',
            'dsc'           =>  'Sillas para escritorios',
            'subgrupo_id'   =>  '33'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20010-0099',
            'dsc'           =>  'Teléfonos (internos)',
            'subgrupo_id'   =>  '33'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20020-0002',
            'dsc'           =>  'Cadena de impresora intercambiable',
            'subgrupo_id'   =>  '34'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20020-0007',
            'dsc'           =>  'Microcomputador',
            'subgrupo_id'   =>  '34'
        ]);
        
        App\Articulo::create([
            'codigo'        =>  '20020-0008',
            'dsc'           =>  'Modulador y desmodulador (modem)',
            'subgrupo_id'   =>  '34'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20020-0011',
            'dsc'           =>  'Terminal con teclado',
            'subgrupo_id'   =>  '34'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20020-0012',
            'dsc'           =>  'Unidad central de proceso (CPU)',
            'subgrupo_id'   =>  '34'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20020-0017',
            'dsc'           =>  'Unidad de control de impresora',
            'subgrupo_id'   =>  '34'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20020-0018',
            'dsc'           =>  'Unidad de cinta magnética',
            'subgrupo_id'   =>  '34'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20020-0021',
            'dsc'           =>  'Unidad impresora',
            'subgrupo_id'   =>  '34'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20090-0059',
            'dsc'           =>  'Filtros de agua',
            'subgrupo_id'   =>  '35'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20090-0063',
            'dsc'           =>  'Gaveteros (ver cómodas)',
            'subgrupo_id'   =>  '35'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20090-0097',
            'dsc'           =>  'Mesas',
            'subgrupo_id'   =>  '35'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20090-0098',
            'dsc'           =>  'Mesones',
            'subgrupo_id'   =>  '35'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20090-0101',
            'dsc'           =>  'Mostradores',
            'subgrupo_id'   =>  '35'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20090-0102',
            'dsc'           =>  'Neveras',
            'subgrupo_id'   =>  '35'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20090-0103',
            'dsc'           =>  'Neveras-mostrador',
            'subgrupo_id'   =>  '35'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20090-0116',
            'dsc'           =>  'Purificadores de agua',
            'subgrupo_id'   =>  '35'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20090-0125',
            'dsc'           =>  'Sillas',
            'subgrupo_id'   =>  '35'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20090-0126',
            'dsc'           =>  'Sillones',
            'subgrupo_id'   =>  '35'
        ]);

        App\Articulo::create([
            'codigo'        =>  '20090-0128',
            'dsc'           =>  'Sofás',
            'subgrupo_id'   =>  '35'
        ]);
/*
        App\Articulo::create([
            'codigo'        =>  '',
            'dsc'           =>  '',
            'subgrupo_id'   =>  '35'
        ]);
        factory(App\Articulo::class,27)->create();
*/    
    }
}
