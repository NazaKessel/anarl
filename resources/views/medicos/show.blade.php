@extends('layouts.app_vistas')

@section('content')

<div class="bg-white p-6 rounded shadow">

    <h1 class="text-2x1 font-bold mb-4">
        {{ $medico->nombre }}
    </h1>

    <p>
        {{ $medico->apellido }}
    </p>

    <p>
        {{ $medico->telefono }}
    </p>

</div>
@endsection