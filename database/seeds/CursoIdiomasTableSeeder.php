<?php

use Illuminate\Database\Seeder;

class CursoIdiomasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::all()->each(function($cursos){
            $cursos->idiomas()->sync(Idioma::inRandomOrder()->first()->id);
        });
    }
}
