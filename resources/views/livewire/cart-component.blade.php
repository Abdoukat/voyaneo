<div class="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="tn-left">
                    <li><i class="fa fa-phone"></i> 01.77.69.02.57</li>
                    <li><i class="fa fa-envelope"></i> info.voyaneo@gmail.com</li>
                </ul>
            </div>

        </div>
    </div>
</div>
</header>
    <!-- Breadcrumb Section End -->
<main id="cart" style="max-width:960px">

    <h1 class="mb-5">Votre réservation</h1>
    <div class="container-fluid">
        <div class="row align-items-start mb-5">

            <div class="col-12 col-sm-8 items">
            <!--1-->
                <div class="cartItem row align-items-start">
                    <div class="col-12 mb-2">
                    <img class="w-100" src="../{{Session::get('reservation')['image']}}" alt="art image">
                    </div>
                    <div class="col-12 mb-2 f_cart">
                    <h4 style="font-weight: bold;color: rgb(196, 41, 41)" class="text-center">{{Session::get('reservation')['titre']}}</h4>
                    <p class="pl-1 mb-0">{{Session::get('reservation')['short_description']}}</p>

                    </div>
                    {{-- <div class="col-2">
                    <p class="cartItemQuantity p-1 text-center">1</p>
                    </div> --}}
                    {{-- <div class="col-2">
                    <p id="cartItem1Price">$66</p>
                    </div> --}}
                </div>
               <hr>
            </div>


            <div class="col-12 col-sm-4 p-3 proceed form">




                <div class="row m-0">
                    <div class="col-sm-8 p-0">
                    <h6>prix initial</h6>
                    </div>
                    <div class="col-sm-4 p-0">
                    <p id="subtotal">{{Session::get('reservation')['prix_ini']}}</p>
                    </div>
                </div>

                <div class="row m-0">
                    <div class="col-sm-8 p-0">
                    <h6>Enfant</h6>
                    </div>
                    <div class="col-sm-4 p-0">
                    <p id="subtotal">{{Session::get('reservation')['enfant']}} </p>
                    </div>
                </div>

                <div class="row m-0">
                    <div class="col-sm-8 p-0">
                    <h6>Adulte</h6>
                    </div>
                    <div class="col-sm-4 p-0">
                    <p id="subtotal">{{Session::get('reservation')['adulte']}} </p>
                    </div>
                </div>

                <div class="row m-0">
                    <div class="col-sm-8 p-0 ">
                    <h6>Assurance de voyage</h6>
                    </div>
                    <div class="col-sm-4 p-0">
                    <p id="tax">10 $</p>
                    </div>
                </div>
                <hr>
                <div class="row mx-0 mb-2">
                    <div class="col-sm-8 p-0 d-inline">
                    <h5>Total</h5>
                    </div>
                    <div class="col-sm-4 p-0">
                    <p id="total">{{Session::get('reservation')['prixx']}} $</p>
                    </div>
                </div>



                <form method="post" action="https://sherlocks-payment-webinit.secure.lcl.fr/paymentInit">
                    <input type="hidden" name="Data" value="{{$data}}">
                    <input type="hidden" name="InterfaceVersion" value="HP_2.42">
                    <input type="hidden" name="Seal" value="{{$Seal}}">

                    <input type="submit" value="Payer" class="btn btn-warning btn-block">

                </form>




        </div>
    </div>

</main>
