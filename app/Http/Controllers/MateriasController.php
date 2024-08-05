<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materias = Materia::all();
        return view('materia.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materia.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'creditos' => 'required|integer',
            'tipo' => 'required',
            'valor_hora' => 'required|numeric',
            'estado' => 'required',
        ]);

        Materia::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'creditos' => $request->creditos,
            'tipo' => $request->tipo,
            'valor_hora' => $request->valor_hora,
        ]);

        return redirect()->route('materia.create')->with('success', 'Materia creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    // Buscar el recurso por ID
    $materia = Materia::find($id);

    // Verificar si el recurso existe
    if (!$materia) {
        // Redirigir o mostrar un mensaje de error si no se encuentra el recurso
        return redirect()->route('materia.index')->with('error', 'Materia no encontrada');
    }

    // Pasar el recurso a la vista
    return view('materia.show', compact('materia'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $materia = Materia::find($id);
    return view('materia.update', compact('materia'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'creditos' => 'required|integer',
            'tipo' => 'required',
            'valor_hora' => 'required|numeric',
        ]);

        $materia = Materia::findOrFail($id);
        $materia->update($request->all());

        return redirect()->route('materia.index')->with('success', 'Materia actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $materia = Materia::findOrFail($id);
        $materia->delete();

        return redirect()->route('materia.index')->with('success', 'Materia eliminada con éxito');
    }
}
