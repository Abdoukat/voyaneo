<?php

namespace App\Http\Livewire;
use Session;

use Livewire\Component;

class CartComponent extends Component
{
    public function render()
    {
              $number = Session::get('reservation')['prixx'];
              $test = number_format($number, 2, '', '');
              $secretKey = "CgX7xf_no3pegt9d-oPuQbXN5mVGbPPrBdFjgbbND0U";
              $data ="amount=$test|currencyCode=978|merchantId=216000012440001|normalReturnUrl=https://www.voyaneo.com/welcome|keyVersion=1";



              $data_send = utf8_encode($data);
            //   $seal=hash_hmac('sha256', $data_send, $secretKey);
              $Seal = hash('sha256', $data.$secretKey);




        return view('livewire.cart-component',['data'=>$data,'Seal'=>$Seal])->layout('layouts.base');
    }
}
