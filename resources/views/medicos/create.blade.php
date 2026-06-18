@extends('layouts.app_vistas')

@section('content')

<h1 class="text-2xl font-bold mb-4">
    Nuevo Medico
</h1>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('medicos.store') }}"
      method="POST"
      class="bg-white p-6 rounded shadow">

    @csrf

    <div class="mb-4">
        <label class="block mb-2">Nombre</label>

        <input type="text"
               name="nombre"
               class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-2">Apellido</label>

        <input type="text"
               name="apellido"
               class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-2">Teléfono</label>

        <input type="text"
               name="telefono"
               class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-2">Email</label>

        <input type="email"
               name="email"
               class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-2">Especialidad</label>

        <select name="especialidad_id"
                class="w-full border rounded p-2">

            <option value="">Seleccione una especialidad</option>

            @foreach($especialidades as $especialidad)
                <option value="{{ $especialidad->id }}">
                    {{ $especialidad->nombre }}
                </option>
            @endforeach

        </select>
    </div>

    <div class="mb-4">
        <label class="flex items-center gap-2">
            <input type="checkbox"
                   name="activo"
                   value="1"
                   checked>

            Activo
        </label>
    </div>

    <button class="bg-green-600 text-white px-4 py-2 rounded">
        Guardar
    </button>

</form>

@endsection