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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;1,100&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Crete+Round:ital@1&family=Poppins:ital,wght@0,100;1,100&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;1,100&display=swap" rel="stylesheet">

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
        {{-- <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div> --}}
        <div class="header-configure-area">


        </div>
        <nav class="mainmenu mobile-menu">
            <ul>


                <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg ">Se connecter</a>
                <a href="{{ route('register') }}" class="btn btn-info btn-lg ">Inscription</a>
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

    @auth
        @if (Auth::user()->name === false)
            <div class="menu-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="/shop">
                                    <img src="{{ asset('asset/img/voyaneo_couleur.png') }}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="nav-menu">
                                <nav class="mainmenu mobile-menu">
                                    <ul>
                                        {{-- <li ><a href="{{ url('shop') }}">Accueil</a></li>
                                <li><a href="/shop">Offres</a></li>
                                <li><a href="{{ route('order.show') }}">MES RESERVATIONS</a></li> --}}
                                    </ul>
                                </nav>
                                {{-- <div class="nav-right search-switch">
                            <i class="icon_search"></i>
                        </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="menu-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="/shop">
                                    <img src="{{ asset('asset/img/logo-doré.png') }}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="nav-menu">
                                @if (Route::has('login'))
                                    @auth
                                        @if (Auth::user()->utype === 'ADM')
                                            <div class="language-option">
                                                <div class="dropdown mt-3">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="text-center" style="font-size: 15px;color: #AA8662">
                                                            <i class="far fa-user"
                                                                style="font-size: 20px;color: #313950"></i><br> Mon compte
                                                        </div>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                        <li><a title="Dashboard" href="{{ route('admin.dashboard') }}"
                                                                class="menu-item">Dashboard</a></li>
                                                        <li><a title="product" href="{{ route('admin.product') }}"
                                                                class="menu-item">Les offres</a></li>
                                                        <li><a title="contact" href="{{ route('contact.show') }}"
                                                                class="menu-item">contact</a></li>
                                                        <li><a title="avis" href="{{ route('admin.avis') }}"
                                                                class="menu-item">Les commentaires</a></li>
                                                        <li><a title="user" href="{{ route('user.show') }}"
                                                                class="menu-item">Les utilisateurs</a></li>
                                                        <li><a title="order" href="{{ route('admin.order') }}"
                                                                class="menu-item">Les commandes</a></li>
                                                        <li><a title="shop" href="{{ url('shop') }}"
                                                                class="menu-item">Voir les offres</a></li>
                                                        <li class="menu-item">
                                                            <a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                                class="btn btn-danger mt-2">Déconnecter</a>
                                                        </li>

                                                        <form id="logout-form" action="{{ Route('logout') }}" method="post">
                                                            @csrf

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="language-option">
                                                <div class="dropdown mt-3">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="text-center" style="font-size: 15px;color: #AA8662">
                                                            <i class="far fa-user"
                                                                style="font-size: 20px;color: #313950"></i><br> Mon compte
                                                        </div>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <ul>
                                                            <li><a title="user" href="{{ route('user_vip.show') }}"><i
                                                                        class="fas fa-address-card"></i> Profil</a></li>


                                                            <li class="menu-item mt-2">
                                                                <a href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                                    class="btn btn-danger">Déconnecter</a>
                                                            </li>
                                                        </ul>
                                                        <form id="logout-form" action="{{ Route('logout') }}" method="post">
                                                            @csrf

                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        @endif
                                    @else
                                        {{-- <a href="{{route('login')}}" class="btn btn-outline-primary btn-lg ">Se connecter</a>
                                                <a href="{{route('register')}}" class="btn btn-outline-warning btn-lg ">Inscription</a> --}}
                                    @endif
            @endif
            </div>
            </div>
            </div>
            </div>

        @endauth
    @else
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="/">
                                <img src="{{ asset('asset/img/logo-doré.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu mobile-menu">
                                <ul>
                                    {{-- <li ><a href="{{ url('shop') }}">Accueil</a></li>
                                                    <li><a href="/shop">Offres</a></li>
                                                    <li><a href="{{ route('order.show') }}">MES RESERVATIONS</a></li> --}}
                                </ul>
                            </nav>
                            {{-- <div class="nav-right search-switch">
                                                <i class="icon_search"></i>
                                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endif


        <!-- Header End -->



        {{ $slot }}



        <!-- Footer Section Begin -->
        <footer class="footer-section">
            <div class="info-service" style="background-color: #313950">
                <div class="container">
                    <div class="row pt-5">
                        <div class="col-lg-4 text-center">

                            <h3 class="text-light"> <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="30" viewBox="0 0 48 48"
                                    style="enable-background:new 0 0 48 48;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0 {
                                            fill: #FFFFFF;
                                        }

                                    </style>
                                    <path class="st0" d="M13.1,34.8l14.5-7.1l7.1-14.5l-14.5,7.2L13.1,34.8z M24,26c-0.6,0-1-0.2-1.4-0.6C22.2,25,22,24.6,22,24
                           s0.2-1,0.6-1.4C23,22.2,23.4,22,24,22s1,0.2,1.4,0.6C25.8,23,26,23.4,26,24s-0.2,1-0.6,1.4C25,25.8,24.6,26,24,26z M24,44
                           c-2.7,0-5.3-0.5-7.8-1.6c-2.4-1-4.6-2.5-6.4-4.3s-3.2-3.9-4.3-6.4S4,26.7,4,24s0.5-5.3,1.6-7.8s2.5-4.6,4.3-6.4s3.9-3.2,6.4-4.3
                           S21.3,4,24,4s5.3,0.5,7.8,1.6s4.6,2.5,6.4,4.3s3.2,3.9,4.3,6.4c1.1,2.4,1.6,5,1.6,7.8s-0.5,5.3-1.6,7.8c-1,2.4-2.5,4.6-4.3,6.4
                           s-3.9,3.2-6.4,4.3C29.3,43.5,26.7,44,24,44z M24,24L24,24L24,24L24,24L24,24L24,24L24,24L24,24L24,24z M24,41c4.7,0,8.7-1.7,12-5
                           s5-7.3,5-12s-1.7-8.7-5-12s-7.3-5-12-5s-8.7,1.7-12,5s-5,7.3-5,12s1.7,8.7,5,12S19.3,41,24,41z" />
                                </svg>Des voyages d’exception</h3>
                            <p class="hf_6">Des offres de voyage haut de gamme
                                rigoureusement sélectionnées</p>
                        </div>
                        <div class="col-lg-4  text-center">
                            <h3 class="text-light"> <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="30" viewBox="0 0 48 48"
                                    style="enable-background:new 0 0 48 48;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0 {
                                            fill: #FFFFFF;
                                        }

                                    </style>
                                    <path class="st0" d="M17.3,45l-3.8-6.5L5.9,37l0.9-7.4L2,24l4.8-5.5l-0.9-7.4l7.6-1.6L17.3,3L24,6.1L30.7,3l3.8,6.6l7.5,1.6
                           l-0.8,7.4L46,24l-4.8,5.6L42,37l-7.5,1.5L30.7,45L24,41.9L17.3,45z M21.9,30.6l11.4-11.2l-2.2-2l-9.1,9l-4.8-5l-2.3,2.2L21.9,30.6z
                            M18.6,41l5.4-2.2l5.5,2.2l3.3-5l5.9-1.5l-0.6-5.9l4.1-4.6l-4.1-4.7l0.6-5.9l-5.9-1.4l-3.4-5L24,9.2l-5.5-2.2l-3.4,5l-5.8,1.4
                           l0.6,5.9l-4,4.7l4,4.6l-0.6,6.1l5.8,1.4L18.6,41z" />
                                </svg> Les meilleures réductions</h3>
                            <p class="hf_6">Des prix exclusifs et des réductions exceptionnelles jusqu’à-70%</p>
                        </div>
                        <div class="col-lg-4  text-center">
                            <h3 class="text-light"> <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="30" viewBox="0 0 48 48"
                                    style="enable-background:new 0 0 48 48;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0 {
                                            fill: #FFFFFF;
                                        }

                                    </style>
                                    <path class="st0" d="M38.8,23.6c-0.2-4-1.7-7.5-4.5-10.2s-6.2-4.3-10.2-4.4v-3c2.4,0.1,4.7,0.6,6.8,1.5s4,2.2,5.6,3.8
                           s2.9,3.5,3.8,5.6s1.5,4.4,1.5,6.8H38.8z M30.4,23.6c-0.2-1.7-0.8-3.1-2-4.2c-1.2-1.1-2.6-1.8-4.2-2v-3c2.5,0.2,4.6,1.1,6.4,2.8
                           c1.7,1.7,2.7,3.9,2.9,6.4H30.4z M39.8,42c-4.1,0-8.1-1-12.1-3s-7.6-4.6-10.8-7.8C13.6,28,11,24.4,9,20.4S6,12.3,6,8.2
                           c0-0.6,0.2-1.2,0.7-1.6S7.6,6,8.2,6h7c0.5,0,0.9,0.2,1.2,0.5c0.3,0.3,0.6,0.7,0.7,1.3l1.4,6.3c0.1,0.5,0.1,0.9,0,1.3
                           c-0.1,0.4-0.3,0.7-0.5,1l-5,5.1c1.9,3.1,4,5.8,6.3,8.1s4.9,4.2,7.9,5.8l4.8-4.9c0.3-0.4,0.7-0.6,1.1-0.8s0.9-0.2,1.3-0.1l6,1.3
                           c0.5,0.1,0.9,0.3,1.2,0.8C41.8,32,42,32.5,42,33v6.8c0,0.6-0.2,1.2-0.7,1.6C40.9,41.8,40.4,42,39.8,42z M11.4,18.6l4.1-4.1l0,0l0,0
                           L14.4,9c0,0,0,0,0,0c0,0,0,0,0,0H9l0,0l0,0c0,1.3,0.2,2.7,0.6,4.3C10,14.8,10.6,16.6,11.4,18.6z M39,39L39,39L39,39v-5.3l0,0l0,0
                           l-5.2-1.1l0,0l0,0l-3.9,4.2c1.4,0.6,2.9,1.1,4.4,1.5C36,38.7,37.5,38.9,39,39z M29.9,36.8L29.9,36.8L29.9,36.8L29.9,36.8L29.9,36.8
                           L29.9,36.8L29.9,36.8L29.9,36.8L29.9,36.8z M11.4,18.6L11.4,18.6L11.4,18.6L11.4,18.6L11.4,18.6L11.4,18.6L11.4,18.6L11.4,18.6
                           L11.4,18.6z" />
                                </svg> Nos experts à votre service</h3>
                            <p class="hf_6">Consultez notre rubrique d'aide 24h/24 et 7j/7</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-text">
                    <div class="row">

                        <div class="col-lg-3 offset-lg-1">
                            <div class="ft-contact">
                                <h6>A propos de Voyaneo</h6>
                                <ul>
                                    <li><a href="{{ url('about') }}" class="footer_font">Qui-sommes-nous ?</a></li>
                                    <li><a href="" class="footer_font">Conditions Générales </a></li>
                                    <li><a href="{{ url('contact') }}" class="footer_font">Contact</a></li>
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
            {{-- <div class="copyright-option">
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
        </div> --}}
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
                integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
        </script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
                integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
        </script>
        <script src="{{ asset('asset/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('asset/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('asset/js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>




        <script>
            function show() {

                var eco_trans = document.getElementById('trans_eco');
                bus_trans = document.getElementById('trans_bus');







                eco_trans.style.display = "";
                bus_trans.style.display = "";



            }

            function desactiver() {

                var eco_trans = document.getElementById('trans_eco');
                bus_trans = document.getElementById('trans_bus');





                eco_trans.style.display = "none";
                bus_trans.style.display = "none";

                eco_trans.value = "0";
                bus_trans.value = "0";

            }
        </script>

        <script>
            $(document).ready(function() {
                $("#your_summernote").summernote();
                $('.dropdown-toggle').dropdown();

            });
        </script>
        <script type="text/javascript">
            var i = 0;
            $("#dynamic").click(function() {
                ++i;
                $("#dynamicName").append('<tr><td><input type="text" name="nom_ville[' + i +
                    ']" placeholder="Enter Nom villes" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
                );
            });
            $(document).on('click', '.remove-input-field', function() {
                $(this).parents('tr').remove();
            });
        </script>
        <script type="text/javascript">
            var i = 0;
            $("#dynamic-ar").click(function() {
                ++i;
                $("#dynamicAddRemove").append('<tr><td><input type="text" name="all_date[' + i +
                    ']" placeholder="Enter les dates " class="form-control" /></td></td><td><input type="text" name="prix_date[' +
                    i +
                    ']" placeholder="Enter prix villes" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
                );
            });
            $(document).on('click', '.remove-input-field', function() {
                $(this).parents('tr').remove();
            });
        </script>


        <script>
            $(function() {
                // Multiple images preview with JavaScript
                var multiImgPreview = function(input, imgPreviewPlaceholder) {

                    if (input.files) {
                        var filesAmount = input.files.length;

                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();

                            reader.onload = function(event) {
                                $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                    imgPreviewPlaceholder);
                            }

                            reader.readAsDataURL(input.files[i]);
                        }
                    }

                };

                $('#images').on('change', function() {
                    multiImgPreview(this, 'div.imgPreview');
                });
            });
        </script>


        @livewireScripts
    </body>

    </html>
