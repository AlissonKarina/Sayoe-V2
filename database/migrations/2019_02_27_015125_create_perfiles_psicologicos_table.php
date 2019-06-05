<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilesPsicologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles_psicologicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recomendacion', 180)->nullable();
            $table->string('motivo', 45)->nullable();
            $table->string('fecha_limite')->nullable();
            $table->tinyInteger('estado')->default('0');
            $table->string('semestre')->nullable();
            
            $table->string('codigo_alumno',8);

            $table->foreign('codigoAlumno')->references('codigo')->on('alumnos');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfiles_psicologicos');
    }
}
