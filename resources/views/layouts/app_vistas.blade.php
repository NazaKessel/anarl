<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANARL</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <nav class="bg-blue-700 text-white p-4">
        <div class="container mx-auto flex gap-6">
            <a href="{{ route('especialidades.index') }}" class="hover:underline">
                Especialidades
            </a>

            <a href="{{ route('medicos.index') }}" class="hover:underline">
                Médicos
            </a>
        </div>
    </nav>

    <main class="container mx-auto p-6">
        @yield('content')
    </main>

</body>
</html>