<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IdiomasAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('carrera_alumno', function(Blueprint $table)
        {
           $table->integer('idioma_noUnico')->unsigned();
           $table->foreign('idioma_noUnico')->references('id')->on('idioma')->onDelete('cascade');

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
          Schema::dropIfExists('idioma_alumno');
    }
}
