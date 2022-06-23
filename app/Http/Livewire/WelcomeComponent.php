<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class WelcomeComponent extends Component
{
    public function render()
    {
        return view('livewire.welcome-component')->layout('layouts.base');
    }
}
