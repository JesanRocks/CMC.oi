<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('articulo_id')->unsigned();
            $table->string('cantidad',);
            $table->string('codigo',64)->unique();
            $table->string('grupo',64);
            $table->string('independiente',64);
            $table->string('serial',64);
            $table->string('modelo',64);
            $table->integer('marca',)->unsigned();
            $table->integer('color',)->unsigned();
            $table->string('incorp',64);
            $table->string('desincorp',64);
            $table->mediumText('observacion');
            $table->timestamps();

            //Relaciones
            $table->foreign('articulo_id')->references('id')->on('articulos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
}
