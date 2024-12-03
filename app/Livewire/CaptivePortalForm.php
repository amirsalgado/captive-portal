<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class CaptivePortalForm extends Component
{
    public $full_name = '';
    public $phone_number = '';
    public $birth_date = '';

    // Define error message in Spanish
    protected $messages = [
        'full_name.required' => 'El nombre completo es requerido.',
        'full_name.max' => 'El nombre no debe exceder los 255 caracteres.',
        'phone_number.required' => 'El número de teléfono es requerido.',
        'phone_number.numeric' => 'El número de teléfono debe contener solo números.',        
        'birth_date.required' => 'La fecha de nacimiento es requerida.',
        'birth_date.date' => 'La fecha de nacimiento debe ser una fecha válida.',
        'birth_date.before' => 'La fecha de nacimiento debe ser una fecha en el pasado.',
    ];

    // Define validation rules
    protected function rules()
    {
        return [
            'full_name' => ['required', 'string', 'max:255'],
            'phone_number' => [
                'required',
                'numeric',                
                'digits_between:10,15' // Assuming standard phone number lengths
            ],
            'birth_date' => [
                'required',
                'date',
                'before:today'
            ],
        ];
    }

    // Real-time validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        try {
            $validatedData = $this->validate();

            // Format birth_date to ensure consistent date format
            $validatedData['birth_date'] = Carbon::parse($this->birth_date)->format('Y-m-d');

            // Create client using transaction
            $client = Client::create($validatedData);

            // Clear form fields after successful submission
            $this->reset(['full_name', 'phone_number', 'birth_date']);

            // Flash success message
            session()->flash('message', '¡Cliente registrado exitosamente!');
            session()->flash('type', 'success');

        } catch (\Exception $e) {
            Log::error('Error creating client: ' . $e->getMessage());
            session()->flash('message', 'Error al registrar el cliente. Por favor, intente nuevamente.');
            session()->flash('type', 'error');
        }
    }

    public function render()
    {
        return view('livewire.captive-portal-form');
    }

    // Reset form
    public function resetForm()
    {
        $this->reset(['full_name', 'phone_number', 'birth_date']);
        $this->resetValidation();
    }
}
