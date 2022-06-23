<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Avis;

class AdminAvisComponent extends Component
{
    public function destroy($id)
      {

        Avis::where('id', $id)->delete();


          return back()->with('danger', 'le message a étè supprimer');
      }
    public function render()
    {
        $avis = Avis::paginate(5);

        return view('livewire.admin.admin-avis-component',['avis'=>$avis])->layout('layouts.base');
    }
}
