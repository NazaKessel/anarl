@extends('layouts.app_vistas')

@section('content')

<h1 class="text-2xl font-bold mb-4">
    Editar Medico
</h1>

<form action="{{ route('medicos.update', $medico) }}"
      method="POST"
      class="bg-white p-6 rounded shadow">

    @csrf
    @method('PUT')

    <label class="block font-semibold mb-1">
        Nombre
    </label>
    <input
        type="text"
        name="nombre"
        value="{{ $medico->nombre }}"
        class="w-full border rounded p-2 mb-4">

    <label class="block font-semibold mb-1">
        Apellido
    </label>
    <input
        type="text"
        name="apellido"
        value="{{ $medico->apellido }}"
        class="w-full border rounded p-2 mb-4">

    <label class="block font-semibold mb-1">
        Teléfono
    </label>
    <input
        type="text"
        name="telefono"
        value="{{ $medico->telefono }}"
        class="w-full border rounded p-2 mb-4">

    <label class="block font-semibold mb-1">
        Email
    </label>
    <input
        type="text"
        name="email"
        value="{{ $medico->email }}"
        class="w-full border rounded p-2 mb-4">

    <label class="block font-semibold mb-1">
        Especialidad
    </label>
    <select
        name="especialidad_id"
        class="w-full border rounded p-2 mb-4">

        @foreach($especialidades as $especialidad)
            <option
                value="{{ $especialidad->id }}"
                {{ $medico->especialidad_id == $especialidad->id ? 'selected' : '' }}>
                {{ $especialidad->nombre }}
            </option>
        @endforeach

    </select>

    <div class="mb-4">
        <input type="hidden" name="activo" value="0">

        <label class="flex items-center gap-2">
            <input
                type="checkbox"
                name="activo"
                value="1"
                {{ $medico->activo ? 'checked' : '' }}>

            Activo
        </label>
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Actualizar
    </button>

</form>

@endsection