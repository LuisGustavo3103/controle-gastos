<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="w-full bg-blue-900 py-4">
        <div class="mx-auto max-w-6xl flex justify-between items-center">
            <div>
                <a href="#" class="text-white uppercase p-2 rounded hover:bg-blue-950">Dashboard</a>
                <a href="#" class="text-white uppercase p-2 rounded hover:bg-blue-950">Transações</a>
                <a href="#" class="text-white uppercase p-2 rounded hover:bg-blue-950">Categorias</a>
            </div>
            <div class="bg-white px-2 py-1 rounded">
                <p>Sair</p>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>

</html>
