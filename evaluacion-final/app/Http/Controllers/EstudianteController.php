<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstudianteRequest;
use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    function index()
    {
        $estudiantes = Estudiante::all();
        return view("pages.index")->with("estudiantes", $estudiantes);
    }

    function create() {
        return view("pages.registrar-estudiante");
    }

    function store(StoreEstudianteRequest $request)
    {
        //dd($request);
        $validatedData = $request->validated();
        $createdEstudiante = new Estudiante;
        $createdEstudiante->nombres = $validatedData["nombres"];
        $createdEstudiante->apellidos = $validatedData["apellidos"];
        $createdEstudiante->fecha_nacimiento = date("Y-m-d", strtotime($validatedData["fecha_nacimiento"]));
        $createdEstudiante->save();

        return redirect()->route("index")->with("successMessage", "Estudiante guardado exitosamente.");
    }

    function destroy($studentId)
    {
        $estudianteToDelete = Estudiante::find($studentId);
        $estudianteToDelete->delete();
        return redirect()
            ->route("index")
            ->with("successMessage", "Estudiante eliminado exitosamente.");
    }    
}