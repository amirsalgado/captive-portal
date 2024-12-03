<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class BirthdayAlerts extends Component
{
    public $birthdayClients = [];

    public function mount()
    {
        $this->loadBirthdayClients();
    }

    protected function loadBirthdayClients()
    {
        try {
            $today = Carbon::now();
            $this->birthdayClients = Client::whereMonth('birth_date', $today->month)
                ->whereDay('birth_date', $today->day)
                ->get();
        } catch (\Exception $e) {
            Log::error('Error fetching birthday clients: ' . $e->getMessage());
            $this->birthdayClients = collect(); // Return an empty collection on error
        }
    }

    public function render()
    {
        return view('livewire.birthday-alerts', [
            'birthdayClients' => $this->birthdayClients,
        ]);
    }
}