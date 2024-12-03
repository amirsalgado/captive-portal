<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use Carbon\Carbon;

class BirthdayAlerts extends Component
{
    public $birthdayClients = [];

    public function mount()
    {
        $this->birthdayClients = Client::whereMonth('birth_date', Carbon::now()->month)
            ->whereDay('birth_date', Carbon::now()->day)
            ->get();
    }

    public function render()
    {
        return view('livewire.birthday-alerts');
    }
}