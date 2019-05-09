<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Alumno;
class CarreraController extends Controller
{
    public function listarCarreras() {

    	$carreras = Carrera::all();

    	if($carreras->isEmpty()) {
    		return response()->json(['mensaje' => 'No se encuentran carreras registrados'], 404);
    	}

    	return response()->json($carreras, 200);
    }
	public function obtenerCarrera($id) {

    	$carrera = Carrera::find($id);

    	if(!$Carrera) {
    		return response()->json(['mensaje' => 'No se encontró el recurso solicitado'], 404);
    	}

    	return response()->json($Carrera, 200);
    }
	public function agregarCarrera(Request $request) {
    	$request->validate([
    		'nombre' => 'string|required',
    	]);

    	$carrera = new Carrera([
    		'nombre' => $request->nombre,
    	]);

    	$carrera->save();

    	return response()->json(['mensaje' => 'Datos agregados con éxito'], 201);
    }
	 public function actualizarDatosCarrera(Request $request, $id) {
    	$request->validate([
    		'nombre' => 'string|required',
    	]);

		$carrera = Carrera::find($id);

		if(!$carrera) {
			return response()->json(['mensaje' => 'No se encontró el recurso solicitado'], 404);
		}

		$carrera->nombre = $request->nombre;
		
		$carrera->save();

		return response()->json(['mensaje' => 'Datos actualizados con éxito']);
    }
	public function obtenerCarreraAlumnos($id) {
    	$carrera = Carrera::find($id);

    	if(!$carrera) {
    		return response()->json(['mensaje' => 'No se encontró el recurso solicitado'], 404);
    	}

    	if($carrera->libros->isEmpty()) {
    		return response()->json(['mensaje' => 'No se encontraron alumnos asociados a la carrera especificada'], 404);
    	}

    	return response()->json($carrera->alumnos, 200);
    }

}
