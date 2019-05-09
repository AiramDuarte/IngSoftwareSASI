<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{

    protected $fillable = [
	'nUnico',
    	'nombre', 
		'noCursos',
    ];
	
	public function alumnos() {
		return $this->belongsToMany('App\Alumno', 'idiomas_alumnos');
	}

}
