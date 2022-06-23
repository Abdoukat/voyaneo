<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminAddProductComponent extends Component
{
    public function addProduct(Request $req){
        $image =array();

                $date = array();
                $prix_d = array();
                $ville_name =array();

                if($files = $req->file('image')){
                    foreach ($files as $file){
                        $image_name = $file->getClientOriginalName();
                        $image_full_name = $image_name;
                        $upload_path ='Offre/uplods/';
                        $image_url = $upload_path.$image_full_name;
                        $file->move($upload_path,$image_full_name);
                        $image[] = $image_url;


                    }
                 }

                foreach ($req->all_date as $key => $value) {
                    $date[] = $value;
                }

                foreach ($req->prix_date as $key => $value) {
                    $prix_d[] = $value;
                }
                foreach ($req->nom_ville as $key => $value) {
                    $ville_name[] = $value;
                }

                 Product::insert([
                  'image'=>implode('|', $image),
                  'titre'=>$req->titre,
                  'short_description'=>$req->short_description,
                  'description'=>$req->description,
                  'slug'=>$req->slug,
                  'eco'=>$req->eco,
                  'bus'=>$req->bus,
                  'prix_pub'=>$req->prix_pub,
                  'prix_ini'=>$req->prix_ini,
                  'stock_status'=>'disponible',
                  'trans'=>$req->trans,
                  'enfant'=>$req->enfant,
                  'all_date'=>implode('|', $date),
                  'prix_date'=>implode('|', $prix_d),
                  'nom_ville'=>implode('|', $ville_name),
                  'assur_mult'=>$req->assur_mult,
                  'assur_annul'=>$req->assur_annul,

                ]);



                return back()->with('success', 'Les informations sont bien enregistrer');
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
