<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;

class CaptivePortalForm extends Component
{
    public $full_name, $phone_number, $birth_date;

    protected $rules = [
        'full_name' => 'required|string|max:255',
        'phone_number' => 'required|numeric|unique:clients,phone_number',
        'birth_date' => 'required|date',
    ];

    public function submit()
    {
        $this->validate();

        // Crear o actualizar cliente
        Client::create([
            'full_name' => $this->full_name,
            'phone_number' => $this->phone_number,
            'birth_date' => $this->birth_date,
        ]);

        session()->flash('message', '¡Cliente registrado exitosamente!');
    }

    public function render()
    {
        return view('livewire.captive-portal-form');
    }
}
