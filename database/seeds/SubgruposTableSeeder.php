<?php

use Illuminate\Database\Seeder;

class SubgruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Subgrupo::create([
            'codigo'    =>	'14010-0000',
            'dsc'       =>	'Maquinaria y equipos de construcción y mantenimiento',
            'grupo_id'	=>	'2'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'14020-0000',
            'dsc'       =>	'Maquinarias y equipos para mantenimiento de automotores',
            'grupo_id'	=>	'2'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'14030-0000',
            'dsc'       =>	'Maquinarias y equipos agrícolas y pecuarios',
            'grupo_id'	=>	'2'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'14040-0000',
            'dsc'       =>	'Maquinarias y equipos de artes gráficas y reproducción',
            'grupo_id'	=>	'2'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'14050-0000',
            'dsc'       =>	'Maquinarias y equipos industriales y de taller',
            'grupo_id'	=>	'2'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'14060-0000',
            'dsc'       =>	'Maquinarias y equipos de energía',
            'grupo_id'	=>	'2'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'14070-0000',
            'dsc'       =>	'Maquinarias y equipos de riego y acueductos',
            'grupo_id'	=>	'2'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'14080-0000',
            'dsc'       =>	'Equipos de almacen ',
            'grupo_id'	=>	'2'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'14990-0000',
            'dsc'       =>	'Otras maquinarias y demás equipos de construcción, campo, industria y taller',
            'grupo_id'	=>	'2'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'15010-0000',
            'dsc'       =>	' Vehículos automotores terrestres',
            'grupo_id'	=>	'3'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'15020-0000',
            'dsc'       =>	' Equipos ferroviarios y de cables aéreos',
            'grupo_id'	=>	'3'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'15030-0000',
            'dsc'       =>	' Equipos marítimos de transporte',
            'grupo_id'	=>	'3'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'15040-0000',
            'dsc'       =>	' Equipos aéreos de transporte',
            'grupo_id'	=>	'3'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'15050-0000',
            'dsc'       =>	' Vehículos de tracción no motorizados',
            'grupo_id'	=>	'3'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'15060-0000',
            'dsc'       =>	' Equipos auxiliares de transporte',
            'grupo_id'	=>	'3'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'15990-0000',
            'dsc'       =>	' Otros equipos de transporte, tracción y elevación',
            'grupo_id'	=>	'3'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'16010-0000',
            'dsc'       =>	' Equipos de telecomunicaciones',
            'grupo_id'	=>	'4'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'16020-0000',
            'dsc'       =>	' Equipos de señalamiento',
            'grupo_id'	=>	'4'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'16030-0000',
            'dsc'       =>	' Equipos de control de tráfico aéreo',
            'grupo_id'	=>	'4'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'16040-0000',
            'dsc'       =>	' Equipos de correo',
            'grupo_id'	=>	'4'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'16990-0000',
            'dsc'       =>	' Otros equipos de comunicaciones y de señalamiento',
            'grupo_id'	=>	'4'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'17010-0000',
            'dsc'       =>	'Equipos médicos - quirúrgicos, dentales y veterinarios',
            'grupo_id'	=>	'5'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'17990-0000',
            'dsc'       =>	'Otros Equipos médicos - quirúrgicos, dentales y veterinarios',
            'grupo_id'	=>	'5'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'18010-0000',
            'dsc'       =>	' Equipos científicos y de laboratorio',
            'grupo_id'	=>	'6'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'18020-0000',
            'dsc'       =>	' Equipos de enseñanza, deporte y recreación',
            'grupo_id'	=>	'6'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'18030-0000',
            'dsc'       =>	' Obras de arte',
            'grupo_id'	=>	'6'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'18040-0000',
            'dsc'       =>	' Libros y revistas',
            'grupo_id'	=>	'6'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'18050-0000',
            'dsc'       =>	' Equipos religiosos',
            'grupo_id'	=>	'6'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'18060-0000',
            'dsc'       =>	' Instrumentos musicales',
            'grupo_id'	=>	'6'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'18990-0000',
            'dsc'       =>	' Otros equipos científicos, religiosos, de enseñanza y recreación',
            'grupo_id'	=>	'6'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'19010-0000',
            'dsc'       =>	'Equipos y armamentos de defensa y seguridad pública',
            'grupo_id'	=>	'7'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'19990-0000',
            'dsc'       =>	' Otros equipos para la defensa y seguridad pública',
            'grupo_id'	=>	'7'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'20010-0000',
            'dsc'       =>	' Mobiliario y equipos de oficina',
            'grupo_id'	=>	'8'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'20020-0000',
            'dsc'       =>	' Equipos de procesamiento de datos',
            'grupo_id'	=>	'8'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'20090-0000',
            'dsc'       =>	' Mobiliario y equipos de alojamiento ',
            'grupo_id'	=>	'8'
        ]);
                
        App\Subgrupo::create([
            'codigo'    =>	'20990-0000',
            'dsc'       =>	' Otras máquinas, muebles y demás equipos de oficina y de alojamiento',
            'grupo_id'	=>	'8'
        ]);

        App\Subgrupo::create([
            'codigo'    =>	'21010-0000',
            'dsc'       =>	' Semovientes',
            'grupo_id'	=>	'9'
        ]);

    }
}
