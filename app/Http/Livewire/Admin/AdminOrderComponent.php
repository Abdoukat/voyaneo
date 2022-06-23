<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;

class AdminOrderComponent extends Component
{
    public function render()
    {
        $order = Order::paginate(5);

        return view('livewire.admin.admin-order-component',['order'=>$order])->layout('layouts.base');
    }
}
