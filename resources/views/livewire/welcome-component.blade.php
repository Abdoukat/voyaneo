<style>
    #titre{
    font-family: 'Kaushan Script', cursive;
    font-size:40px;
    letter-spacing:3px;
    color:#614572 ;
    margin:0;
    margin-bottom:20px;
}
#logo{
    font-family: 'Kaushan Script', cursive;
    font-size:60px;
    letter-spacing:3px;
    color:#5892FF ;
    margin:0;
    margin-bottom:20px;
}
</style>
<div>
    <div class="container" style="margin-top:5%;">
        <div class="row">
            <div class="jumbotron" style="box-shadow: 2px 2px 4px #000000;">
                <h1><a href="/" id="logo">
                    <img src="{{asset('asset/img/voyaneo_couleur.png')}}" alt="logo">
                </a></h1>
                <h2 class="text-center" id="titre">VOTRE COMMANDE A ÉTÉ REÇUE</h2>
              <h3 class="text-center">Merci pour votre paiement, il est en cours de traitement</h3>
              <h3 class="text-center"><i class="fa fa-check main-content__checkmark mt-3" style="font-size: 50px;color: green"></i></h3>


              <p class="text-center font-weight-bold">Votre reservation #@if (!empty(Session::get('reservation')['transactionReference']))
                    (vide)
              @else
                  {{-- {{Session::get('reservation')['transactionReference']}} --}}
              @endif</p>
              <p class="text-center">Vous recevrez un e-mail de confirmation de commande avec les détails de votre commande et un lien pour suivre votre processus.</p>
                <center><div class="btn-group" style="margin-top:50px;">
                    <a href="{{ url('shop') }}" class="btn btn-lg btn-warning" >Retour à page d'accueil</a>
                </div></center>
            </div>
        </div>
    </div>
</div>


<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
