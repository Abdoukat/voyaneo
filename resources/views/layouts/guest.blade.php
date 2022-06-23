{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VOYANEO</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    @livewireStyles
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>

        <nav class="mainmenu mobile-menu">
            <ul>


                <li class="active"><a href="{{route('login')}}" class="btn btn-outline-primary btn-lg ">Se connecter</a></li>
                <li><a href="{{route('register')}}" class="btn btn-outline-warning btn-lg ">Inscription</a></li>

            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> 01.77.69.02.57</li>
            <li><i class="fa fa-envelope"></i> info.voyaneo@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> 01.77.69.02.57</li>
                            <li><i class="fa fa-envelope"></i> info.voyaneo@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>

                            {{-- <div class="language-option">
                                <img src="{{asset('asset/img/flag.jpg')}}" alt="">
                                <span>EN <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">Zi</a></li>
                                        <li><a href="#">Fr</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                            @if (Route::has('login'))
                            @auth
                                @if (Auth::user()->utype === 'ADM')
                                <div class="language-option">
                                    <span>My Account ({{Auth::user()->name}})<i class="fa fa-angle-down"></i></span>
                                    <div class="flag-dropdown">
                                        <ul>
                                            <li><a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashbord</a></li>
                                            <li class="menu-item" >
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a>
                                            </li>
                                            <form id="logout-form" action="{{ Route('logout')}}" method="post">
                                                @csrf

                                           </form>
                                        </ul>
                                    </div>
                                </div>
                                @else
                                <div class="language-option">
                                    <span>My Account ({{Auth::user()->name}})<i class="fa fa-angle-down"></i></span>
                                    <div class="flag-dropdown">
                                        <ul>
                                            <li><a title="Dashboard" href="{{ route('user.dashboard') }}">Dashbord</a></li>
                                            <li class="menu-item" >
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a>
                                            </li>
                                            <form id="logout-form" action="{{ Route('logout')}}" method="post">
                                                @csrf

                                           </form>
                                        </ul>
                                    </div>
                                </div>
                                 @endif

                                @else
                                    <a href="{{route('login')}}" class="btn btn-outline-primary btn-lg ">Se connecter</a>
                                    <a href="{{route('register')}}" class="btn btn-outline-warning btn-lg ">Inscription</a>
                                 @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="/">
                                <img src="{{asset('asset/img/logo-doré.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu mobile-menu">
                                {{-- <ul>
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="/shop">Rooms</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul> --}}
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- Header End -->



   {{$slot}}



    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row pt-5 border-bottom">
                <div class="col-lg-4 text-center">

                     <h3 class="text-light"><i class="fa fa-handshake-o" aria-hidden="true"></i> Des voyages d’exception</h3>
                     <p class="hf_6">Des offres de voyage haut de gamme
                        rigoureusement sélectionnées</p>
                </div>
                <div class="col-lg-4  text-center">
                     <h3 class="text-light"><i class="fa fa-gift" aria-hidden="true"></i> Les meilleures réductions</h3>
                     <p class="hf_6">Des prix exclusifs et des réductions exceptionnelles jusqu’à-70%</p>
                </div>
                <div class="col-lg-4  text-center">
                     <h3 class="text-light"><i class="fa fa-users" aria-hidden="true"></i> Nos experts à votre service</h3>
                     <p class="hf_6">Consultez notre rubrique d'aide 24h/24 et 7j/7</p>
                </div>
            </div>

            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <h1 style="color: white">voyaneo <i class="fad fa-map-marked-alt" style="color: rgb(96, 168, 236)"></i></h1>
                                </a>
                            </div>
                            {{-- <p>We inspire and reach millions of travelers<br /> across 90 local websites</p> --}}
                            <div class="fa-social">
                                {{-- <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>01.77.69.02.57</li>
                                <li>info@voyaneo.com</li>
                                <li>163 avenue Charles de Gaulle 92200
                                    Neuilly sur Seine</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>newsletter</h6>
                            <p>Recevez les dernières mises à jour et offres.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Conditions d'utilisation</a></li>
                            <li><a href="#">Qui sommes-nous ?</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés </p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{asset('asset/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/js/main.js')}}"></script>
    @livewireScripts
</body>

</html>

