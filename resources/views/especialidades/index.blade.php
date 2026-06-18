@extends('layouts.app_vistas')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Especialidades
</h1>

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="flex justify-end mb-4">
    <a href="{{ route('especialidades.create') }}"
       class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
        Nueva Especialidad
    </a>
</div>

<div class="bg-white rounded shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-200">
            <tr>
                <th class="p-3 text-left">ID</th>
                <th class="p-3 text-left">Nombre</th>
                <th class="p-3 text-left">Descripción</th>
                <th class="p-3 text-left">Acciones</th>
            </tr>
        </thead>

        <tbody>

            @forelse($especialidades as $especialidad)

                <tr class="border-b">

                    <td class="p-3">
                        {{ $especialidad->id }}
                    </td>

                    <td class="p-3">
                        {{ $especialidad->nombre }}
                    </td>

                    <td class="p-3">
                        {{ $especialidad->descripcion }}
                    </td>

                    <td class="p-3">
                        <div class="flex gap-2">

                            <a href="{{ route('especialidades.show', $especialidad->id) }}"
                               class="bg-blue-500 text-white px-3 py-1 rounded">
                                Ver
                            </a>

                            <a href="{{ route('especialidades.edit', $especialidad->id) }}"
                               class="bg-yellow-500 text-white px-3 py-1 rounded">
                                Editar
                            </a>

                            <form action="{{ route('especialidades.destroy', $especialidad->id) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    onclick="return confirm('¿Está seguro de eliminar esta especialidad?')"
                                    class="bg-red-600 text-white px-3 py-1 rounded">

                                    Eliminar

                                </button>

                            </form>

                        </div>
                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="4" class="p-4 text-center text-gray-500">
                        No hay especialidades registradas.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection