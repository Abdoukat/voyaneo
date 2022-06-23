<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class UserShowComponent extends Component
{
    // public $id_user;

    // public function mount($id)
    // {
    //     $this->id_user = User::find($id);
    // }
    public function render()
    {
        $user = User::find(Auth::user()->id);
        $profil = Profile::where('user_id',Auth::user()->id)->orderBy('updated_at', 'desc')->first();

        return view('livewire.user.user-show-component',['user'=>$user,'profil'=>$profil])->layout('layouts.base');
    }
}
