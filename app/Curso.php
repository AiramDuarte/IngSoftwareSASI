<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'horario', 'nivel', 'capacidad'
	];

    public function alumnos(){
        return $this->belongsToMany('App\Alumno', 'cursos_alumnos');
     }

     public function idiomas(){
        return $this->belongsTo('App\Idioma', 'curso_idiomas');
     }
}
