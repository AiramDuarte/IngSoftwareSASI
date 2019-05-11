<?php

use Illuminate\Database\Seeder;

class CarreraAlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::all()->each(function($alumnos){
            $alumnos->carreras()->sync(Carrera::inRandomOrder()->first()->id);
        });
    }
}
