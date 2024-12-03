<form wire:submit.prevent="submit">
    <div>
        <label for="full_name">Nombre Completo</label>
        <input type="text" id="full_name" wire:model="full_name">
        @error('full_name') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="phone_number">Número de Teléfono</label>
        <input type="tel" id="phone_number" wire:model="phone_number">
        @error('phone_number') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="birth_date">Fecha de Nacimiento</label>
        <input type="date" id="birth_date" wire:model="birth_date">
        @error('birth_date') <span class="error">{{ $message }}</span> @enderror
    </div>

    @if (session()->has('message'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('message') }}
        </div>
    @endif

    <button type="submit">Registrar</button>
    <button type="button" wire:click="resetForm">Limpiar</button>
</form>
