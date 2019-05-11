<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CursoIdiomas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_idiomas', function (Blueprint $table){

            
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->integer('idioma_id')->unsigned();
            $table->foreign('idioma_id')->references('id')->on('idiomas')->onDelete('cascade');
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
        Shema::dropIfExists('curso_idiomas');
    }
}
