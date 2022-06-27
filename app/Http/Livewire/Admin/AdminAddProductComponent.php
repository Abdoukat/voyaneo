<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminAddProductComponent extends Component
{
    public function addProduct(Request $req)
    {
        $image = array();



        if ($files = $req->file('image')) {
            foreach ($files as $file) {
                $image_name = $file->getClientOriginalName();
                $image_full_name = $image_name;
                $upload_path = 'Offre/uplods/';
                $image_url = $upload_path . $image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            }
        }



        Product::insert([
            'image' => implode('|', $image),
            'titre' => $req->titre,
            'short_description' => $req->short_description,
            'description' => $req->description,
            'slug' => $req->slug,
            'eco' => $req->eco,
            'bus' => $req->bus,
            'prix_pub' => $req->prix_pub,
            'prix_ini' => $req->prix_ini,
            'stock_status' => 'disponible',
            'trans' => $req->trans,
            'enfant' => $req->enfant,
            'assur_mult' => $req->assur_mult,
            'assur_annul' => $req->assur_annul,

        ]);


        return redirect()->to('/admin/offre');
        // return redirect("admin/offre")->with('success', 'Les informations sont bien enregistrer');
    }


    public function destroy($slug)
    {

        Product::where('slug', $slug)->delete();


        return back()->with('danger', 'le message a étè supprimer');
    }


    

    public function render()
    {
        return view('livewire.admin.admin-add-product-component')->layout('layouts.base');
    }
}
