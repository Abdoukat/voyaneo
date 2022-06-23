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
                    <a href="{{ route('order.show') }}"><i class="fas fa-shopping-basket" style="color: #ce9a67"></i>
                        Mes réservation</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h1 class="fw-bold">Nos <span style="color: #AA8662 ">dernières destinations !</span></h1>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Rooms Section Begin -->
<section class="hp-room-section">
    <div class="container">
        <div class="hp-room-items">
            <div class="row">
                @foreach ($products as $item)
                    @php
                        $image = explode('|', $item->image);
                    @endphp

                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('product.details', ['slug' => $item->slug]) }}">
                            <div class="room-item">
                                <img src="{{ $image[0] }}" alt="">
                                <div class="ri-text">
                                    <h3>{{ $item->prix_pub }}$<span>/3 Jours</span></h3>
                                    <h4>{{ $item->titre }}</h4>

                                    <table>
                                        <tbody>

                                            <tr>
                                                <td class="r-o">Hotel 5 étoils </td>
                                                <td>
                                                    <div class="rating" style="color: #AA8662">
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star-half_alt"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="col-lg-12 mb-3 text-center">


        <a href="#" style="color: #AA8662;border-bottom: 1px solid #AA8662">Voir plus</a>


    </div>
</section>
<!-- Rooms Section End -->
