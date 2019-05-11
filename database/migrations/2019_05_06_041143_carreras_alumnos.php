<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarrerasAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras_alumnos', function(Blueprint $table)
        {
            $table->integer('carrera_id')->unsigned();
           $table->foreign('carrera_id')->references('id')->on('carrera')->onDelete('cascade');

           $table->integer('alumno_matricula')->unsigned();
            $table->foreign('alumno_matricula')->references('matricula')->on('alumno')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('carreras_alumnos');
    }
}
