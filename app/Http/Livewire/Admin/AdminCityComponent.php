<?php

namespace App\Http\Livewire\Admin;

use App\Models\City;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCityComponent extends Component
{
    public $city;

    public function destroy($id)
    {

        City::where('id', $id)->delete();


        return back()->with('danger', 'le message a étè supprimer');
    }
    public function addCity(Request $request)
    {
        City::insert([
            'name' => $request->name,
        ]);
        return redirect()->to('/admin/city');
    }


    public function render()
    {

        // $city = DB::table('cities')->get();

        return view('livewire.admin.admin-city-component')->layout('layouts.base');
    }
}
