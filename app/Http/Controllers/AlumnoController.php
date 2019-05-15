<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Alumno;

class AlumnoController extends Controller
{
    public function listarAlumnos() {

    	$alumno = Alumno::all();

    	if($alumno->isEmpty()) {
    		return response()->json(['mensaje' => 'No se encuentran los alumnos registrados'], 404);
    	}

    	return response()->json($alumno, 200);
    }

public function obtenerAlumno($matricula) {

    	$alumno = Alumno::find($matricula);

    	if(!$alumno) {
    		return response()->json(['mensaje' => 'No se encontró el alumno'], 404);
    	}

    	return response()->json($alumno, 200);
	}
	public function agregarAlumno(Request $request) {
    	$request->validate([
			'nombre' => 'string|required',
			'semestre' => 'integer|required',
			'porcentajeCarrera' => 'float|required',
			'disponiblidad' => 'string|required',
    	]);

    	$alumno = new Alumno([
			'nombre' => 'string|required',
			'semestre' => 'integer|required',
			'porcentajeCarrera' => 'float|required',
			'disponiblidad' => 'string|required',
    	]);

    	$alumno->save();

    	return response()->json(['mensaje' => 'Datos agregados con éxito'], 201);
	}
	
	public function actualizarDatosAlumnos(Request $request, $id) {
    	$request->validate([
    		'nombre' => 'string|required',
			'semestre' => 'integer|required',
			'porcentajeCarrera' => 'float|required',
			'disponiblidad' => 'string|required',
    	]);

		$alumno = Alumnos::find($id);

		if(!$alumno) {
			return response()->json(['mensaje' => 'No se encontró el recurso solicitado'], 404);
		}

		$alumno->nombre = $request->nombre;
        $alumno->semestre = $request->semestre;
		$alumno->porcentajeCarrera = $request->porcentajeCarrera;
		$alumno->disponiblidad = $request->disponiblidad;

		$alumno->save();

		return response()->json(['mensaje' => 'Datos actualizados con éxito']);
    }

}
