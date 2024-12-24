<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Layout</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-gray-100">
    <div class="min-h-screen">
        @yield('content')
    </div>
    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>
