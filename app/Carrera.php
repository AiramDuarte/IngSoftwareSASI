<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
   protected $fillable = [
		'nombre'
   ];

   public function alumnos(){
      return $this->hasMany('App\Alumno', 'carrera_alumnos');
   }
}
