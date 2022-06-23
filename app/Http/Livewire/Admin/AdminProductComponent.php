<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class AdminProductComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $product = Product::paginate(5);

        return view('livewire.admin.admin-product-component',['product'=>$product])->layout('layouts.base');
    }
}
