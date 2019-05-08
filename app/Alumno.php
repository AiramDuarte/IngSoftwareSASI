<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
   protected $fillable = [
   		'matricula','nombre', 'semestre', 'porcentajeCarrera','disponiblidad'
   ];

   public function carrera(){

   	this->belongsToMany('App\Carrera', 'carrera_alumno');
   }
}
