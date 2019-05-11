<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CursosAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos_alumnos', function (Blueprint $table){
           
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->integer('alumno_id')->unsigned();
            $table->foreign('alumno_id')->references('matricula')->on('alumnos')->onDelete('cascade');
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
        Shema::dropIfExists('cursos_alumnos');
    }
}
