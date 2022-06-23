<style>



    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: #BA68C8;
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }
    /**  button    **/
    .file {
      opacity: 0;
      width: 0.1px;
      height: 0.1px;
      position: absolute;
    }
    .file-input label {
      display: block;
      position: relative;
      width: 200px;
      height: 50px;
      border-radius: 25px;
      background: linear-gradient(40deg, #18a1b9, #7873f5);
      box-shadow: 0 4px 7px rgba(0, 0, 0, 0.4);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      transition: transform .2s ease-out;
    }

    </style>
<div class="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="tn-left">
                    <li><i class="fa fa-phone"></i> 01.77.69.02.57</li>
                    <li><i class="fa fa-envelope"></i> info.voyaneo@gmail.com</li>
                </ul>
            </div>
            <div class="col-6" style="color: #AA8662">
                <div class="tn-right">
                    <a href="/shop"><i class="fas fa-map-marked-alt" style="color: #ce9a67"></i> Offres</a>
                    <a href="{{ route('order.show') }}"><i class="fas fa-shopping-basket" style="color: #ce9a67"></i> Mes réservations</a>
                </div>
            </div>

        </div>
    </div>
</div>
    <div class="container rounded bg-white mt-5" style="padding: 40px 0">
        <div class="row">
            <div class="col-md-4 border-right"  style=" background: linear-gradient(40deg, #a857b3, #14129e);border-radius: 20px">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                    <img src="../asset/img/prof-up.png" alt="" style="border-radius: 60%" width="220px" height="220px">
                    <span class="font-weight-bold mt-5 text-white">{{Auth::user()->name}}</span>

                </div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back">

                        </div>
                        <a class="text-right btn btn-info" href="{{ route('user.edit', ['id'=>Auth::user()->id]) }}">Modifier mon profil</a>
                    </div>
                    <div class="row mt-2">

                        <p> Civilité :<b>@if ($profil === null)
                            (vide)
                        @else

                            {{$profil->genre}}
                        @endif</b></p>
                    </div>

                    <div class="row mt-2">

                        <p> Prénom :<b>@if ($profil === null)
                            (vide)
                        @else

                            {{$profil->prenom}}
                        @endif</b></p>
                    </div>
                    <div class="row mt-3">
                        <p> Nom :<b> {{Auth::user()->name}}</b></p>
                    </div>

                    <div class="row mt-3">
                        <p> Email :<b> {{Auth::user()->email}}</b></p>
                    </div>


                    <div class="row mt-3">
                        <p> Adresse :<b>@if ($profil === null)
                            (vide)
                        @else
                           {{$profil->address}}
                        @endif </b></p>

                    </div>

                    <div class="row mt-3">
                        <p> Code Postal :<b> @if ($profil === null)
                            (vide)
                        @else
                             {{$profil->code_postal}}
                        @endif </b></p></b></p>

                    </div>
                    <div class="row mt-3">
                        <p> Ville :<b> @if ($profil === null)
                            (vide)
                        @else
                              {{$profil->ville}}
                        @endif</b></p>

                    </div>
                    <div class="row mt-3">
                        <p> Téléphone :<b> @if ($profil === null)
                            (vide)
                        @else
                             0{{$profil->phone}}
                        @endif </b></p>

                    </div>
                    <div class="row mt-3">
                        <p> Date de naissance :<b> @if ($profil === null)
                            (vide)
                        @else
                             {{$profil->date_birth}}
                        @endif</b></p>



                    </div>


                </div>
            </div>
        </div>
    </div>
