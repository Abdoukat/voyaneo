<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeComponent extends Component
{
    public function render()
    {

        return view('livewire.home-component')->layout('layouts.base');
    }
}
