@section('nav-content')
<div class="menu-item">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="logo">
                    <a href="/">
                        <img src="{{asset('asset/img/voyaneo_couleur.png')}}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            {{-- <li ><a href="{{ url('shop') }}">Accueil</a></li> --}}
                            <li><a href="/shop">Offres</a></li>
                            <li><a href="{{ route('order.show') }}">MES RESERVATIONS</a></li>
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
@stop
