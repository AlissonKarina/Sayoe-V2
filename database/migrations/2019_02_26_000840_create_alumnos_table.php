<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {        
            $table->string('codigo',8)->unique();
            $table->integer('ciclo')->nullable();
            $table->char('situacion', 1)->nullable();
            $table->float('promedio', 5, 2)->nullable();
            $table->string('anho_ingreso', 4);
            $table->string('estado_permanencia')->nullable();
            $table->integer('total_creditos')->nullable();
            
            $table->primary('codigo');
            
            $table->string('dni',8)->unique();
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_escuela')->unsigned();

            $table->foreign('dni')->references('dni')->on('personas');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_escuela')->references('id')->on('escuelas_profesionales');
        

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
