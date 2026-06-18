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
}
