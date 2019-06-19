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
            $table->increments('id_perfil');
            $table->string('recomendacion', 180)->nullable();
            $table->string('motivo', 45)->nullable();
            $table->date('fecha_limite')->nullable();
            $table->dateTime('fecha_resuelto')->nullable();
            $table->dateTime('fecha_recomendacion')->nullable();
            $table->tinyInteger('estado')->default('0');
            $table->integer('anho')->unisgned()->nullable();
            $table->integer('semestre')->unisgned()->nullable();
            
            $table->string('codigo_alumno',8);

            $table->foreign('codigo_alumno')->references('codigo')->on('alumnos');
        
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
