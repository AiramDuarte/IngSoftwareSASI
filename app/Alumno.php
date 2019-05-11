<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
   protected $fillable = [
   		'nombre', 'semestre', 'porcentajeCarrera','disponiblidad'
   ];

   public function carreras(){
      return $this->belongsToMany('App\Carrera', 'carrera_alumno');
   }

   public function cursos(){
      return $this->belongsToMany('App\Curso', 'curso_alumno');
   }
}
