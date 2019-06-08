<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_alternativa')->unsigned();
            $table->integer('id_pefil_psico')->unsigned();

            $table->foreign('id_alternativa')->references('id')->on('alternativas');
            $table->foreign('id_pefil_psico')->references('id_perfil')->on('perfiles_psicologicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
