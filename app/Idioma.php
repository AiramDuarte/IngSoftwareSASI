<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{

    protected $fillable = [
    	'nombre', 'noCursos',
    ];
	
	public function cursos() {
		return $this->hasMany('App\Curso', 'curso_idiomas');
	}

}
