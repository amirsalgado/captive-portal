<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Cautivo - Sancocho Bacano</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-gray-100">
    <div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/logo.png') }}" alt="Logotipo del Restaurante" class="h-24">
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>