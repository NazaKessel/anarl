@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-4">
    Editar Especialidad
</h1>

<form action="{{ route('especialidades.update', $especialidad) }}"
      method="POST"
      class="bg-white p-6 rounded shadow">

    @csrf
    @method('PUT')

    <input
        type="text"
        name="nombre"
        value="{{ $especialidad->nombre }}"
        class="w-full border rounded p-2 mb-4">

    <textarea
        name="descripcion"
        class="w-full border rounded p-2 mb-4">{{ $especialidad->descripcion }}</textarea>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Actualizar
    </button>

</form>

@endsection