<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->string('dni',8)->unique();
            $table->string('nombre',45);
            $table->string('apellido_paterno', 45);
            $table->string('apellido_materno', 45)->nullable();            
            $table->tinyInteger('sexo');
            $table->date('fecha_nacimiento');
            $table->string('foto', 100)->nullable();
            $table->string('telefono',10)->nullable();
            $table->string('celular',10)->nullable();
            $table->string('direccion',80);
            $table->string('correo_personal',60)->nullable();

            $table->primary('dni');
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