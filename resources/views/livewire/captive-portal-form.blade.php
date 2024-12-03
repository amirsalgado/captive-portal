<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <livewire:welcome.navigation />
    @endif  

    <div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/logo.png') }}" alt="Logotipo del Restaurante" class="h-24">
        </div>

        <h1 class="text-center text-2xl font-semibold text-gray-900">
            Portal WiFi - Sancocho Bacano
        </h1>

        <p class="text-center text-sm text-gray-600 mt-2">
            Bienvenido a nuestro portal de acceso a internet. Por favor, regístrate para poder acceder a nuestra red.
        </p>

        <hr class="my-4 border-t border-gray-300">

        <form wire:submit.prevent="submit" class="space-y-4">
            <div>
                <label for="full_name" class="block text-gray-700 font-bold mb-2">Nombre Completo</label>
                <input type="text" id="full_name" wire:model="full_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('full_name') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="phone_number" class="block text-gray-700 font-bold mb-2">Número de Teléfono</label>
                <input type="tel" id="phone_number" wire:model="phone_number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('phone_number') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="birth_date" class="block text-gray-700 font-bold mb-2">Fecha de Nacimiento</label>
                <input type="date" id="birth_date" wire:model="birth_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('birth_date') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            @if (session()->has('message'))
                <div class="alert alert-{{ session('type') }} mb-4 p-4 rounded bg-{{ session('type') == 'success' ? 'green' : 'red' }}-100 text-{{ session('type') == 'success' ? 'green' : 'red' }}-700">
                    {{ session('message') }}
                </div>
            @endif

            <p class="text-sm text-gray-700 mt-2 mb-6">
                Al registrarte, aceptas los <a href="{{ route('terms') }}" class="text-blue-500 hover:underline">Términos y Condiciones</a> de uso de la red WiFi.
            </p>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Registrar</button>
                <button type="button" wire:click="resetForm" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Limpiar</button>
            </div>
        </form>
    </div>
</div>