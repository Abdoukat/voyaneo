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

    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-5">
                    <div class="hero-text">
                        <h1 style="text-shadow: 0 0 5px rgb(15, 15, 15);">L'évasion <br>
                         au rendez-vous
                        </h1>
                        <p style="text-shadow: 0 0 5px rgb(15, 15, 15);">Retrouvez un large choix de destinations premium <br>dans votre espace membre</p>


                    </div>
                </div>

                <div class="col-lg-4 col-md-6 banner-right">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Se connecter</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Devenir Membre</a>
                      </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                        <form class="form-wrap " method="POST" action="{{ route('login')}}">

                            <x-jet-validation-errors class="mb-4" />
                            @csrf
                            <div class="form-group mb-3">
                                <input class="form-control" type="email" id="frm-login-uname" name="email" placeholder="Saisissez votre adresse e-mail" :value="old('email')" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input class="form-control" type="password" id="frm-login-pass" name="password" placeholder="************" required autocomplete="current-password">


                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}" style="color:black;font-weight: bold;a:hover{color:blue;}">
                                    Mot de passe oublié ?
                                </a>
                            @endif
                            </div>





                            <button type="submit" class="btn btn-block btn-log">Se connecter</button>
                        </form>
                      </div>
                      <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                        <x-jet-validation-errors class="mb-4" />
                        <form class="form-wrap" action="{{ route('register') }}" name="frm-login" method="POST">
                            @csrf
                            <fieldset class="check-date">

                                <input class="form-control" type="text" id="frm-reg-lname" name="name" placeholder="Nom*" :value="old('name')" required autocomplete="name" autofocus>
                            </fieldset>
                            <fieldset class="check-date">

                                <input class="form-control" type="email" id="frm-reg-email" name="email" placeholder="Email *" :value="old('email')" >
                            </fieldset>

                            <fieldset class="check-date">

                                <input class="form-control" type="password" id="frm-reg-pass" name="password" placeholder="Mot de passe *" required autocomplete="new-password" >
                            </fieldset>
                            <fieldset class="check-date">

                                <input class="form-control" type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="Confirmer Mot de passe *" required autocomplete="new-password">
                            </fieldset>
                            <button type="submit" class="btn btn-block btn-log" class="form-control">Enregistrer</button>



                        </form>
                      </div>

                    </div>
                </div>

                {{-- <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Login</h3>
                        <form method="POST" action="{{ route('login') }}">
                            <div class="check-date">
                                <label for="">Email :</label>
                                <input type="email" name="email" :value="old('email')" required autofocus >

                            </div>
                            <div class="check-date">
                                <label for="date-in">Mot de passe :</label>
                                <input type="password" name="password" required autocomplete="current-password" >

                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <button type="submit">Valider</button>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="hero-slider owl-carousel ">
            <div class="hs-item set-bg" data-setbg="{{asset('asset/img/hero/Home_page.png')}}"></div>
            <div class="hs-item set-bg" data-setbg="{{asset('asset/img/hero/vive_maroc.png')}}"></div>
            <div class="hs-item set-bg" data-setbg="{{asset('asset/img/hero/Home_page_2.png')}}"></div>
        </div>
    </section>
    <!-- Hero Section End -->

        <!-- Services Section End -->
        {{-- <section class="services-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <span></span>
                            <h2>Découvrez Nos Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-item">
                            <i class="flaticon-036-parking"></i>
                            <h4>Travel Plan</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-item">
                            <i class="flaticon-033-dinner"></i>
                            <h4>Catering Service</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-item">
                            <i class="flaticon-026-bed"></i>
                            <h4>Babysitting</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-item">
                            <i class="flaticon-024-towel"></i>
                            <h4>Laundry</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-item">
                            <i class="flaticon-044-clock-1"></i>
                            <h4>Hire Driver</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-item">
                            <i class="flaticon-012-cocktail"></i>
                            <h4>Bar & Drink</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Services Section End -->
