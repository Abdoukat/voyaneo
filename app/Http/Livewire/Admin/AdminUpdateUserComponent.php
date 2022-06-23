<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUpdateUserComponent extends Component
{
    public function show($id)
      {

       $user =  User::where('id', $id)->get();


       return view('livewire.admin.admin-update-user-component',['$user',$user])->layout('layouts.base');
      }





    public function render()
    {


        return view('livewire.admin.admin-update-user-component')->layout('layouts.base');
    }
}
