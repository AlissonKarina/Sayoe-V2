<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosObservadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos_observados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('nota');

            $table->string('codigoEstudiante',8);
            $table->foreign('codigoEstudiante')->references('codigo')->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos_observados');
    }
}
