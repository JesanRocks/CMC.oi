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
            $table->string('cantidad');
            $table->string('codigo',64)->unique();
            $table->integer('grupo_id')->unsigned();;
            $table->string('independiente',64);
            $table->string('serial',64)->nullable();
            $table->string('modelo',64)->nullable();
            $table->integer('marca_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->string('incorp',64)->nullable();
            $table->string('desincorp',64)->nullable();
            $table->mediumText('observacion')->nullable();
            $table->integer('departamento_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            //Relaciones
            $table->foreign('articulo_id')->references('id')->on('articulos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('grupo_id')->references('id')->on('grupos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('marca_id')->references('id')->on('marcas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('color_id')->references('id')->on('colors')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('departamento_id')->references('id')->on('departamentos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('user_id')->references('id')->on('users')
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
