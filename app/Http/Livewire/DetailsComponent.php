<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Avis;
use Illuminate\Http\Request;
use Session;


class DetailsComponent extends Component
{


    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    // public function store($product_id,$product_name,$product_price,$product_image)
    // {
    //     Cart::add($product_id,$product_name,1,$product_price,$product_image);
    //     session()->flash('success_message','Item added in cart');
    //     return redirect()->route('product.cart');
    // }


    public function create(Request $request){



        $avis = new Avis;

        $avis->star = $request->star;
        $avis->email = $request->email;
        $avis->message = $request->message;


        $avis->save();



            return back()->with('success', 'Les informations sont bien enregistrés');
    }

    public function store(Request $request)
    {
        $transactionReference = random_int(100, 999);


        Session::put('reservation',['prixx' => $request->get('prixx'),'transactionReference' =>$transactionReference,'prix_ini' => $request->get('prix_ini'),'slug' => $request->get('slug'),'short_description' => $request->get('short_description'), 'image' => $request->get('image'),'titre' => $request->get('titre'),'date' => $request->get('date'),'vol' => $request->get('vol'),
        'adulte' => $request->get('adulte'),'enfant' => $request->get('enfant'),'date_dispo' => $request->get('date_dispo'),'flexRadioDefault' => $request->get('flexRadioDefault')]);

        return redirect()->route('checkout.cart');
    }

    public function render()
    {

        $product_detail = Product::where('slug',$this->slug)->first();
        $avis = Avis::all();
        // dd($product);
        // exit;
        return view('livewire.details-component',['product_detail'=>$product_detail,'avis'=>$avis])->layout('layouts.base');
    }
}
