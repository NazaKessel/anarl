<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;
use App\Models\Especialidad;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::all();

        return view('medicos.index' , compact('medicos'));
    }

    public function create()
    {
        $especialidades = Especialidad::all();

        return view('medicos.create', compact('especialidades'));
    }

    public function store(Request $request)
    {
        Medico::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'especialidad_id' => $request->especialidad_id,
            'activo' => $request->has('activo'),
        ]);

        return redirect()->route('medicos.index');
    }

    public function show(string $id)
    {
        $medico = Medico::findOrFail($id);

        return view('medicos.show', compact('medico'));
    }

public function edit(string $id)
{
    $medico = Medico::findOrFail($id);
    $especialidades = Especialidad::all();

    return view('medicos.edit', compact('medico', 'especialidades'));
}

public function update(Request $request, string $id)
{
    $request->validate([
        'nombre' => 'required|max:255',
        'apellido' => 'required|max:255',
        'telefono' => 'required|max:50',
        'email' => 'required|email|max:255',
        'especialidad_id' => 'required|exists:especialidades,id',
        'activo' => 'required|boolean',
    ]);

    $medico = Medico::findOrFail($id);

    $medico->update([
    'nombre' => $request->nombre,
    'apellido' => $request->apellido,
    'telefono' => $request->telefono,
    'email' => $request->email,
    'especialidad_id' => $request->especialidad_id,
    'activo' => $request->activo,
]);

    return redirect()
        ->route('medicos.index')
        ->with('success', 'Médico actualizado correctamente');
}

    public function destroy(string $id)
    {
        $medico = Medico::findOrFail($id);

        $medico->delete();

        return redirect()->route('medicos.index');
    }
}