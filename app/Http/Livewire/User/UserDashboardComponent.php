<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class UserDashboardComponent extends Component
{
    public $prenom;
    public $name;
    public $email;
    public $image;
    public $phone;
    public $address;
    public $ville;
    public $code_postal;
    public $date_birth;
    public $user_id;
    public $genre;


    public function mount()
    {
        $user = User::find(Auth::user()->id);

    $this->genre = $user->genre;
    $this->prenom = $user->prenom;
    $this->name = $user->name;
    $this->email = $user->email;
    $this->image = $user->image;
    $this->phone = $user->phone;
    $this->address = $user->address;
    $this->ville = $user->ville;
    $this->code_postal = $user->code_postal;
    $this->date_birth = $user->date_birth;
    }
    public function updateProfile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->save();

        $profile = new Profile();

        $profile->user_id = Auth::user()->id;
        $profile->genre = $request->genre;
        $profile->prenom = $request->prenom;
        $profile->phone = $request->phone;
        $profile->image = $request->image ;
        $profile->address = $request->address ;
        $profile->ville = $request->ville ;
        $profile->code_postal = $request->code_postal ;
        $profile->date_birth = $request->date_birth ;

        $profile->save();

        return back()->with('success', 'Les informations sont bien enregistrer');




    }

    public function render()
    {
        return view('livewire.user.user-dashboard-component')->layout('layouts.base');
    }
}
