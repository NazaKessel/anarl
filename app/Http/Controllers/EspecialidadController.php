<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    public function index()
    {
        $especialidades = Especialidad::all();

        return view('especialidades.index', compact('especialidades'));
    }

    public function create()
    {
        return view('especialidades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
    'nombre' => 'required|max:100|unique:especialidades,nombre',
    'descripcion' => 'nullable'
]);

        Especialidad::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('especialidades.index');
    }

    public function show(string $id)
{
    $especialidad = Especialidad::findOrFail($id);

    return view('especialidades.show', compact('especialidad'));
}

    public function edit(string $id)
{
    $especialidad = Especialidad::findOrFail($id);

    return view('especialidades.edit', compact('especialidad'));
}

    public function update(Request $request, string $id)
{
    $request->validate([
        'nombre' => 'required|max:100',
        'descripcion' => 'nullable'
    ]);

    $especialidad = Especialidad::findOrFail($id);

    $especialidad->update([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion
    ]);

    return redirect()->route('especialidades.index');
}

    public function destroy(string $id)
{
    $especialidad = Especialidad::findOrFail($id);

    $especialidad->delete();

    return redirect()->route('especialidades.index');
}
}
