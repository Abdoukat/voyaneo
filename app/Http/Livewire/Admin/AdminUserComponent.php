<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class AdminUserComponent extends Component
{

    public function render()
    {
        $user = User::paginate(5);

        return view('livewire.admin.admin-user-component',['user'=>$user])->layout('layouts.base');
    }
}
