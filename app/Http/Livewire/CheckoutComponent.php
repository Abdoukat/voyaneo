<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class CheckoutComponent extends Component
{
    public function addinfo(Request $request){
        $data_first =array();
        $data_last =array();
        $data_birth =array();

        $data_first_kids =array();
        $data_last_kids =array();
        $data_birth_kids =array();

        if($request->Last_name_travel){
        foreach ($request->Last_name_travel as $key => $value) {
            $data_first[] = $value;
        }
        }
        if($request->First_name_travel){
        foreach ($request->First_name_travel as $key => $value) {
            $data_last[] = $value;
        }
        }
        if($request->date_birth_travel){
            foreach ($request->date_birth_travel as $key => $value) {
                $data_birth[] = $value;
        }
        }
        //  kids loop //

        if($request->Last_name_kids){
            foreach ($request->Last_name_kids as $key => $value) {
                $data_first_kids[] = $value;
        }
        }
        if($request->First_name_kids){
        foreach ($request->First_name_kids as $key => $value) {
            $data_last_kids[] = $value;
        }
        }
        if($request->date_birth_kids){
            foreach ($request->date_birth_kids as $key => $value) {
                $data_birth_kids[] = $value;
        }
        }




        Order::insert([
            'genre'=>$request->genre,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'ville'=>$request->ville,
            'code_postal'=>$request->code_postal,
            'gender'=>$request->gender,
            'Last_name_travel'=>implode('|', $data_first),
            'First_name_travel'=>implode('|', $data_last),
            'date_birth_travel'=>implode('', $data_birth),
            'Last_name_kids'=>implode('|', $data_first_kids),
            'First_name_kids'=>implode('|', $data_last_kids),
            'date_birth_kids'=>implode('', $data_birth_kids),
            'Date_expiration'=>$request->Date_expiration,
            'user_id'=>$request->user_id,
            'prix'=>$request->prix,
            'transactionReference'=>$request->transactionReference,
            'date_birth'=>$request->date_birth,
            'vol'=>$request->vol,


          ]);




    return redirect('/cart');
}


    public function render()
    {
        $user = User::find(Auth::user()->id);
        $profil = Profile::where('user_id',Auth::user()->id)->orderBy('updated_at', 'desc')->first();
        return view('livewire.checkout-component',['user'=>$user,'profil'=>$profil])->layout('layouts.base');
    }
}
