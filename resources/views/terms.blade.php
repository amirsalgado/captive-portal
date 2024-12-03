<!-- resources/views/terms.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Términos y Condiciones</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Términos y Condiciones</h1>
        <p class="text-gray-700 mb-4">
            Bienvenido a nuestro portal de acceso a internet. Al utilizar nuestra red WiFi, aceptas los siguientes términos y condiciones:
        </p>

        <h2 class="text-xl font-semibold mb-2">1. Uso de la Red WiFi</h2>
        <p class="text-gray-700 mb-4">
            La red WiFi es proporcionada para el uso exclusivo de nuestros clientes mientras se encuentran en nuestras instalaciones. No está permitido el uso de la red para actividades ilegales, incluyendo pero no limitándose a la descarga de contenido protegido por derechos de autor, el acceso a sitios web ilegales o la distribución de material ofensivo.
        </p>

        <h2 class="text-xl font-semibold mb-2">2. Seguridad</h2>
        <p class="text-gray-700 mb-4">
            Aunque tomamos medidas para asegurar nuestra red WiFi, no podemos garantizar la seguridad de tus datos mientras estás conectado. Es tu responsabilidad asegurarte de que tu dispositivo esté protegido contra virus, malware y otras amenazas de seguridad.
        </p>

        <h2 class="text-xl font-semibold mb-2">3. Privacidad</h2>
        <p class="text-gray-700 mb-4">
            Respetamos tu privacidad y no monitoreamos activamente el contenido de tu tráfico de internet. Sin embargo, nos reservamos el derecho de monitorear y registrar la actividad en nuestra red para asegurar el cumplimiento de estos términos y condiciones.
        </p>

        <h2 class="text-xl font-semibold mb-2">4. Limitación de Responsabilidad</h2>
        <p class="text-gray-700 mb-4">
            No somos responsables por cualquier daño directo o indirecto que pueda resultar del uso de nuestra red WiFi. Esto incluye, pero no se limita a, la pérdida de datos, la interrupción del servicio o cualquier otro daño que pueda ocurrir mientras estás conectado a nuestra red.
        </p>

        <h2 class="text-xl font-semibold mb-2">5. Cambios en los Términos y Condiciones</h2>
        <p class="text-gray-700 mb-4">
            Nos reservamos el derecho de modificar estos términos y condiciones en cualquier momento. Cualquier cambio será efectivo inmediatamente después de su publicación en nuestro portal de acceso a internet.
        </p>

        <p class="text-gray-700 mb-4">
            Al utilizar nuestra red WiFi, aceptas cumplir con estos términos y condiciones. Si no estás de acuerdo con alguno de estos términos, por favor, no utilices nuestra red.
        </p>

        <a href="{{ url()->previous() }}" class="text-blue-500 hover:underline">Volver</a>
    </div>
</body>
</html>