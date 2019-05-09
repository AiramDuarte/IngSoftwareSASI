<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Idioma;

class CursoController extends Controller
{
    public function listarCursos() {

    	$cursos = Curso::all();

    	if($cursos->isEmpty()) {
    		return response()->json(['mensaje' => 'No se encuentran cursos registrados'], 404);
    	}

    	return response()->json($cursos, 200);
    }
	public function obtenerCurso($id) {

    	$curso = Curso::find($id);

    	if(!$curso) {
    		return response()->json(['mensaje' => 'No se encontró el recurso solicitado'], 404);
    	}

    	return response()->json($curso, 200);
    }
	
	 public function agregarCurso(Request $request) {
    	$request->validate([
    		'horario' => 'string|required',
            'nivel' => 'string|required',
            'capacidad' => 'integer|required',
    	]);

    	$curso = new Curso([
    		'horario' => $request->horario,
            'nivel' => $request->nivel,
            'capacidad' => $request->capacidad,
    	]);

    	$curso->save();

    	return response()->json(['mensaje' => 'Datos agregados con éxito'], 201);
    }
	public function actualizarDatosCurso(Request $request, $id) {
    	$request->validate([
    		'horario' => 'string|required',
            'nivel' => 'string|required',
            'capacidad' => 'integer|required',
    	]);

		$curso = Curso::find($id);

		if(!$curso) {
			return response()->json(['mensaje' => 'No se encontró el recurso solicitado'], 404);
		}

		$curso->horario = $request->horario;
        $curso->nivel = $request->nivel;
        $curso->capacidad = $request->capacidad;

		$curso->save();

		return response()->json(['mensaje' => 'Datos actualizados con éxito']);
    }
	public function obtenerIdiomasCurso($id) {
    	$curso = curso::find($id);

    	if(!$curso) {
    		return response()->json(['mensaje' => 'No se encontró el recurso solicitado'], 404);
    	}

    	if($curso->idiomas->isEmpty()) {
    		return response()->json(['mensaje' => 'No se encontraron cursos asociados al idioma especificado'], 404);
    	}

    	return response()->json($curso->idiomas, 200);
    }
}
