<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Idioma;
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

    	$idioma = Idioma::find($id);

    	if(!$idioma) {
    		return response()->json(['mensaje' => 'No se encontró el recurso solicitado'], 404);
    	}

    	return response()->json($idioma, 200);
    }
	
	 public function agregarIdioma(Request $request) {
    	$request->validate([
    		'nombre' => 'string|required',
    		'noCursos' => 'string|required',
    	]);

    	$idioma = new Idioma([
    		'nombre' => $request->nombre,
    		'noCursos' => $request->noCursos,
    	]);

    	$idioma->save();

    	return response()->json(['mensaje' => 'Datos agregados con éxito'], 201);
    }
	public function actualizarDatosIdioma(Request $request, $id) {
    	$request->validate([
    		'nombre' => 'string|required',
    		'noCursos' => 'string|required',
    	]);

		$idioma = Idioma::find($id);

		if(!$idioma) {
			return response()->json(['mensaje' => 'No se encontró el recurso solicitado'], 404);
		}

		$idioma->nombre = $request->nombre;
		$idioma->noCursos = $request->noCursos;

		$idioma->save();

		return response()->json(['mensaje' => 'Datos actualizados con éxito']);
    }
	public function obtenerAlumnosIdioma($id) {
    	$idioma = idioma::find($id);

    	if(!$idioma) {
    		return response()->json(['mensaje' => 'No se encontró el recurso solicitado'], 404);
    	}

    	if($idioma->alumnos->isEmpty()) {
    		return response()->json(['mensaje' => 'No se encontraron alumnos asociados al idioma especificado'], 404);
    	}

    	return response()->json($idioma->alumnos, 200);
    }
}
