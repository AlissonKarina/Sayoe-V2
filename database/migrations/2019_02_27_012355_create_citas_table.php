<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asunto', 100);
            $table->dateTime('fecha');
            $table->string('descripcion', 180)->nullable();
            $table->tinyInteger('estado')->nullable();

            $table->string('codigo_alumno',8);
            $table->integer('id_unayoe_perfil')->unsigned();

            $table->foreign('codigo_alumno')->references('codigo')->on('alumnos');
            $table->foreign('id_unayoe_perfil')->references('id')->on('unayoe_perfiles');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
