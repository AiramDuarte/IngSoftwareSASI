<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Alumno;

class AlumnoController extends Controller
{
    public function listarAlumnos() {

    	$alumnos = Carrera::all();

    	if($alumnos->isEmpty()) {
    		return response()->json(['mensaje' => 'No se encuentran los alumnosregistrados'], 404);
    	}

    	return response()->json($alumnos, 200);
    }

public function obtenerAlumno($matricula) {

    	$alumno = Carrera::find($matricula);

    	if(!$alumno) {
    		return response()->json(['mensaje' => 'No se encontró el alumno'], 404);
    	}

    	return response()->json($alumno, 200);
    }

}
