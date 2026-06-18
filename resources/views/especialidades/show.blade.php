@extends('layouts.app_vistas')

@section('content')

<div class="bg-white p-6 rounded shadow">

    <h1 class="text-2xl font-bold mb-4">
        {{ $especialidad->nombre }}
    </h1>

    <p>
        {{ $especialidad->descripcion }}
    </p>

</div>

@endsection