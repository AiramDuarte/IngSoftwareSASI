<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
       protected $fillable = [
   		'noUnico','nombre'
   ];

      public function alumnos(){

   	this->belongsToMany('App\Alumno', 'carrera_alumno');
   }
}
