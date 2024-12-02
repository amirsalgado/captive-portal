<div class="max-w-lg mx-auto p-4 border border-gray-300 rounded-lg shadow-md">
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-3 mb-4 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="mb-4">
            <label for="full_name" class="block text-sm font-medium text-gray-700">Nombre Completo</label>
            <input type="text" wire:model="full_name" id="full_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('full_name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="phone_number" class="block text-sm font-medium text-gray-700">Número de Teléfono</label>
            <input type="text" wire:model="phone_number" id="phone_number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('phone_number') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="birth_date" class="block text-sm font-medium text-gray-700">Fecha de Nacimiento</label>
            <input type="date" wire:model="birth_date" id="birth_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('birth_date') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600">Registrar Cliente</button>
    </form>
</div>
