<?php

use Illuminate\Database\Seeder;

class CursosAlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::all()->each(function($cursos){
            $cursos->alumnos()->sync(Alumno::inRandomOrder()->first()->id);
        });
    }
}
