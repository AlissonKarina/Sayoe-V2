<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuestionarioEvaluacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuestionario_evaluaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 190);
            $table->string('titulo_secundario', 100);
            $table->string('autor', 190)->nullable();
            $table->integer('nro_preguntas')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuestionario_evaluaciones');
    }
}
