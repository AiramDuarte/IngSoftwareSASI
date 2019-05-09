<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarreraAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // Schema::create('carrera_alumno', function(Blueprint $table)
        //{
            //$table->integer('carrera_noUnico')->unsigned();
           // $table->foreign('carrera_noUnico')->references('noUnico')->on('carrera')->onDelete('cascade');

           // $table->integer('alumno_matricula')->unsigned();
            //$table->foreign('alumno_matricula')->references('matricula')->on('alumno')->onDelete('cascade');
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('carrera_alumno');
    }
}
