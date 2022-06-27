<?php

namespace App\Http\Livewire\Admin;

use App\Models\Offre;
use Illuminate\Http\Request;

use Livewire\Component;

class AdminOffre extends Component
{
    public function offre_plus(Request $req)
    {


        Offre::insert([

            'product_id' => $req->product_id,
            'city_id' => $req->city_id,
            'prix' => $req->prix,
            'date' => $req->date,

        ]);
        return back()->with('success', 'Les informations sont bien enregistrer');
    }

    public function render()
    {
        return view('livewire.admin.admin-offre')->layout('layouts.base');
    }
}
