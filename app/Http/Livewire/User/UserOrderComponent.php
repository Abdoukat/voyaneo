<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserOrderComponent extends Component
{
    // public $id_order;
    // public $id_user;

    // public function mount()
    // {

    //     $this->id_order = DB::table('orders')->where('user_id','=',Auth::user()->id)->get();



    // }






    public function render()
    {
        $id_order = DB::table('orders')->where('user_id','=',Auth::user()->id)->get();

        return view('livewire.user.user-order-component',['id_order'=>$id_order])->layout('layouts.base');
    }
}
