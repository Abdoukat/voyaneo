<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAddUserComponent extends Component
{

    public function store(Request $request){


        $storeData = $request->validate([
          'name' => 'required|max:255',
          'email' => 'required|max:255',
          'password' => 'required|max:255',

      ]);
      $data =  new User;

              $data->name = $request->name;
              $data->email = $request->email;
              $data->password = Hash::make($request->password);
              $data->utype =$request->utype;

              $data->save();

          return redirect()->back()->with('status',' les informations son bien enregistrer ');
       }




    public function destroy($id)
      {

        User::where('id', $id)->delete();


          return back()->with('danger', 'le message a étè supprimer');
      }




    public function render()
    {
        return view('livewire.admin.admin-add-user-component')->layout('layouts.base');
    }
}
