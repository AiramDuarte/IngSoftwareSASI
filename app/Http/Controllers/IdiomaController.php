<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idioma;
use App\Curso;

class IdiomaController extends Controller
{
    public function listarIdiomas() {

    	$idiomas = Idioma::all();

    	if($idiomas->isEmpty()) {
    		return response()->json(['mensaje' => 'No se encuentran idiomas registrados'], 404);
    	}

    	return response()->json($idiomas, 200);
    }
	public function obtenerIdioma($id) {

    	$idiomas = Idioma::find($id);

    	if(!$idiomas) {
    		return response()->json(['mensaje' => 'No se encontró el recurso solicitado'], 404);
    	}

    	return response()->json($idiomas, 200);
    }
	
	 public function agregarIdioma(Request $request) {
    	$request->validate([
    		'nombre' => 'string|required',
    		'noCursos' => 'integer|required',
    	]);

    	$idiomas = new Idioma([
    		'nombre' => $request->nombre,
    		'noCursos' => $request->noCursos,
    	]);

    	$idiomas->save();

    	return response()->json(['mensaje' => 'Datos agregados con éxito'], 201);
    }
	public function actualizarDatosIdioma(Request $request, $id) {
    	$request->validate([
    		'nombre' => 'string|required',
    		'noCursos' => 'integer|required',
    	]);

		$idiomas = Idioma::find($id);

		if(!$idiomas) {
			return response()->json(['mensaje' => 'No se encontró el recurso solicitado'], 404);
		}

		$idiomas->nombre = $request->nombre;
		$idiomas->noCursos = $request->noCursos;

		$idiomas->save();

		return response()->json(['mensaje' => 'Datos actualizados con éxito']);
    }
	public function obtenerCursosIdioma($id) {
    	$idiomas = idioma::find($id);

    	if(!$idiomas) {
    		return response()->json(['mensaje' => 'No se encontró el recurso solicitado'], 404);
    	}

    	if($idiomas->cursos->isEmpty()) {
    		return response()->json(['mensaje' => 'No se encontraron cursos asociados al idioma especificado'], 404);
    	}

    	return response()->json($idiomas->cursos, 200);
    }
}
