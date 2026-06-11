@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-4">
    Nueva Especialidad
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

<form action="{{ route('especialidades.store') }}"
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
        <label class="block mb-2">Descripción</label>

        <textarea name="descripcion"
                  class="w-full border rounded p-2"></textarea>
    </div>

    <button class="bg-green-600 text-white px-4 py-2 rounded">
        Guardar
    </button>

</form>

@endsection