<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'horario', 'nivel', 'capacidad'
	];

	//public function cursos (){
    //return $this->hasMany('App\Idioma', 'noUnico');
    //}
}
