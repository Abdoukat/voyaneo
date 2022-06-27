<style>
    /* skin 2 */
    .skin-2 .num-in {
        background: #FFFFFF;
        box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.15);
        border-radius: 25px;
        height: 40px;
        width: 110px;
        float: left;
    }

    .skin-2 .num-in span {
        width: 40%;
        display: block;
        height: 40px;
        float: left;
        position: relative;
    }

    .skin-2 .num-in span:before,
    .skin-2 .num-in span:after {
        content: '';
        position: absolute;
        background-color: #667780;
        height: 2px;
        width: 10px;
        top: 50%;
        left: 50%;
        margin-top: -1px;
        margin-left: -5px;
    }

    .skin-2 .num-in span.plus:after {
        transform: rotate(90deg);
    }

    .skin-2 .num-in input {
        float: left;
        width: 20%;
        height: 40px;
        border: none;
        text-align: center;
    }

    /* / skin 2 */

    /****** Style Star Rating Widget *****/

    .rating {
        border: none;
        float: left;
    }

    .rating>input {
        display: none;
    }

    .rating>label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    .rating>label {
        color: #ddd;
        float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating>input:checked~label,
    /* show gold star when clicked */
    .rating:not(:checked)>label:hover,
    /* hover current star */
    .rating:not(:checked)>label:hover~label {
        color: #FFD700;
    }

    /* hover previous stars in list */

    .rating>input:checked+label:hover,
    /* hover current star when changing rating */
    .rating>input:checked~label:hover,
    .rating>label:hover~input:checked~label,
    /* lighten current selection */
    .rating>input:checked~label:hover~label {
        color: #FFED85;
    }


    /** star  end*/
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
                    <a href="{{ route('order.show') }}"><i class="fas fa-shopping-basket" style="color: #ce9a67"></i>
                        Mes réservations</a>
                </div>

            </div>


        </div>
    </div>
</div>
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>

<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a class="back_page" href="/shop"><span style="color: #AA8662"><i
                            class="fas fa-angle-left"></i></span> Retour aux offres</a>
            </div>
        </div>
    </div>
</div>

@php
$image = explode('|', $product_detail->image);
// var_dump($image);
// exit;
@endphp
@php
$ville = explode('|', $product_detail->nom_ville);

@endphp
@php
$date_all = explode('|', $product_detail->all_date);

$prix_dates = explode('|', $product_detail->prix_date);

$count = count($date_all);

@endphp

<section class="room-details-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 p-3  mb-3" style="border: 1px solid rgba(100, 92, 92, 0.336)">
                <div class="breadcrumb-text">
                    <h2 class="ligne">{{ $product_detail->titre }}</h2>


                </div>
                <div class="room-details-item">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">



                        <div class="carousel-inner">


                            @foreach ($image as $key => $images)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="../{{ $images }}" class="d-block w-100" alt="...">

                                </div>
                            @endforeach
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                    </div>
                    <div class="rd-text">
                        <div class="rd-title">

                            <div class="rdt-right">
                                <span style="color: #667780;font-size: 20px">* prix par personne sur base chambre
                                    double</span>

                            </div>
                        </div>

                        <div>
                            <table class="table table-hover ">
                                <thead style="background-color: #AA8662;color: white">
                                    <tr>
                                        <th scope="col">Ville de départ</th>
                                        <th scope="col">Date de Départ</th>
                                        <th scope="col">Durée</th>
                                        <th scope="col">Prix/Pers.</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($offre as $item)
                                        <tr>
                                            <th scope="row">{{ $item->name }}</th>
                                            <td>{{ $item->date }}</td>
                                            <td>3 jours</td>
                                            <td style="color: red">{{ $item->prix }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <p class="f-para" id="para_clear"></p>

                        <textarea name="" id="summernote" cols="30" rows="10" hidden>{{ $product_detail->description }}</textarea>

                    </div>
                </div>
                <div class="rd-reviews">
                    <h4 class="ligne">Avis </h4>
                    @php
                        $avis = DB::table('avis')->get();
                    @endphp
                    @foreach ($avis as $avis)
                        <div class="review-item">
                            <div class="ri-pic">

                            </div>
                            <div class="ri-text">
                                <span>{{ $avis->email }}</span>
                                <div class="rating">
                                    @if ($avis->star === '1')
                                        <span style="color: gold"><i class="fas fa-star"></i></span>
                                    @elseif($avis->star === '1 and a half')
                                        <span style="color: gold"><i class="fas fa-star"></i><i
                                                class="fas fa-star-half-alt"></i></span>
                                    @elseif($avis->star === '2')
                                        <span style="color: gold"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                    @elseif($avis->star === '2 and a half')
                                        <span style="color: gold"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
                                    @elseif($avis->star === '3 and a half')
                                        <span style="color: gold"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star-half-alt"></i></span>
                                    @elseif($avis->star === '3')
                                        <span style="color: gold"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                    @elseif($avis->star === '3 and a half')
                                        <span style="color: gold"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star-half-alt"></i></span>
                                    @elseif($avis->star === '4')
                                        <span style="color: gold"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i></span>
                                    @elseif($avis->star === '4 and a half')
                                        <span style="color: gold"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star-half-alt"></i></span>
                                    @elseif($avis->star === '5')
                                        <span style="color: gold"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                    @elseif($avis->star === '5 and a half')
                                        <span style="color: gold"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star-half-alt"></i></span>
                                    @endif
                                </div>

                                <p>{{ $avis->message }}</p>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="review-add">
                    {{-- <h3 class="ligne">Avis</h3> --}}

                    <form action="{{ route('add.avis') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <fieldset class="rating mt-3">
                            <input type="radio" id="star5" name="star" value="5" required /><label
                                class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="star" value="4 and a half"
                                required /><label class="half" for="star4half"
                                title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="star" value="4" required /><label
                                class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="star" value="3 and a half"
                                required /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="star" value="3" required /><label
                                class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="star" value="2 and a half"
                                required /><label class="half" for="star2half"
                                title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="star" value="2" required /><label
                                class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="star" value="1 and a half"
                                required /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="star" value="1" required /><label
                                class="full" for="star1" title="Sucks big time - 1 star"></label>

                        </fieldset>
                        <input type="hidden" class="form-control mb-3" name="email" placeholder="Nom et Prénom"
                            aria-label="Username" aria-describedby="basic-addon1"
                            value="{{ Auth::user()->name }}">


                        <textarea class="form-control mb-3" aria-label="With textarea" name="message" id="" cols="80px"
                            rows="10" placeholder="votre commentaire" required></textarea>
                        <button type="submit" class="btn btn-outline-info btn-block"><i class="fa fa-paper-plane"
                                aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            {{-- <form action="{{ url('cart/add') }}" action="post"> --}}
            <div class="col-lg-4">
                <div class="mb-3 p-3" style="border: 1px solid rgba(100, 92, 92, 0.363)">
                    <h3 class="mb-3 ligne">Offre à partir de :</h3>
                    <h5 style="color: #db7a19">{{ $product_detail->prix_ini }} €* /<strike style="color: red">
                            {{ $product_detail->prix_pub }} €
                        </strike> <span style="color: black"> 3 jours </span></h5>
                </div>
                <div class="room-booking p-4" style="border: 1px solid rgba(100, 92, 92, 0.39)">
                    <h3 class="ligne">Votre réservation</h3>
                    <form action="{{ url('cart/add') }}" method="post">
                        @csrf
                        <input type="text" value="{{ $image[0] }}" name="image" hidden>
                        <input type="text" value="{{ $product_detail->short_description }}"
                            name="short_description" hidden>
                        <input type="text" value="{{ $product_detail->slug }}" name="slug" hidden>
                        <input type="text" value="{{ $product_detail->titre }}" name="titre" hidden>
                        <input type="text" value="{{ $product_detail->prix_ini }}" name="prix_ini" hidden>



                        <div class="container">
                            <div class="row">

                                <input type="text" id="prix_ini" value="{{ $product_detail->prix }}" hidden>
                                <div class="select-option col-12">

                                    <label for="guest">Ville de départ:</label>
                                    <select id="city" name="city" class="mb-3" onchange="cityChange()">

                                        @foreach ($offre as $item)
                                            <option value="{{ $item->city_id }}">{{ $item->name }}</option>
                                        @endforeach
                                        <input type="hidden" name="var1" value="23">

                                    </select>

                                    <label for="room">Choisir une date :</label>
                                    <select id="date" onChange="myNewFunction()">
                                        <option selected value="0">📅 Dates disponibles </option>



                                    </select>
                                    <input type="text" id="date_dispo" name="date_dispo" value="" hidden>

                                    <div id="show_msg" style="font-size: 15px"></div>
                                </div>

                                <input type="text" id="trans_first" name="trans_first"
                                    value="{{ $product_detail->trans }}" hidden>

                                <div class="select-option col-12" id="champ" style="display: none">

                                    <label for="checkbox">Vol :</label>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="radio" name="vol"
                                            id="flexRadioDefault1" value="{{ $product_detail->bus }}">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Business
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="radio" name="vol"
                                            id="flexRadioDefault2" value="{{ $product_detail->eco }}" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Econnomique
                                        </label>
                                    </div>
                                </div>




                                <div class="select-option col-12">
                                    <label for="guest">Voyageurs:</label>
                                    <select id="adulte" name="adulte">
                                        <option value="1">1 Adulte</option>
                                        <option value="2">2 Adultes</option>
                                        <option value="3">3 Adultes</option>
                                        <option value="4">4 Adultes</option>
                                        <option value="5">5 Adultes</option>
                                        <option value="6">6 Adulte</option>
                                        <option value="7">7 Adultes</option>
                                        <option value="8">8 Adultes</option>

                                    </select>
                                </div>

                                <div class="select-option col-12">
                                    <label for="guest">Voyageurs: <span style="color: #ce9a67"> (âge entre 5 ans et
                                            11
                                            ans)</span></label>
                                    <select id="enfant" name="enfant">
                                        <option selected value="0">Enfant </option>
                                        <option value="1">1 Enfant</option>
                                        <option value="2">2 Enfants</option>
                                        <option value="3">3 Enfants</option>
                                        <option value="4">4 Enfants</option>
                                        <option value="5">5 Enfants</option>
                                        <option value="6">6 Enfants</option>
                                        <option value="7">7 Enfants</option>
                                        <option value="8">8 Enfants</option>
                                        <option value="9">9 Enfants</option>
                                        <option value="10">10 Enfants</option>
                                        <option value="11">11 Enfants</option>
                                    </select>
                                    <input type="hidden" id="kids" value="{{ $product_detail->enfant }}">
                                </div>
                                <hr class="hr-color">
                                <div class="select-option col-12">
                                    <label for="guest">Assurances :</label>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="radio"
                                            value="{{ $product_detail->assur_mult }}" name="flexRadioDefault"
                                            id="assur_mult">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            ASSURANCE MULTIRISQUES <a type="button" data-toggle="modal"
                                                data-target="#exampleModal">
                                                <i class="fas fa-info-circle"></i>
                                            </a><span style="color: red">{{ $product_detail->assur_mult }} €</span>
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            value="{{ $product_detail->assur_annul }}" id="assur_annul">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            ASSURANCE ANNULATION <a type="button" data-toggle="modal"
                                                data-target="#exampleModal">
                                                <i class="fas fa-info-circle"></i>
                                            </a><br><span style="color: red">{{ $product_detail->assur_annul }}
                                                €</span>
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="radio" value="0"
                                            name="flexRadioDefault" id="null_assur" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            AUCUNE ASSURANCE <span style="color: red">0,00 €</span>
                                        </label>
                                    </div>
                                </div>
                                <hr class="hr-color">

                                <!--    Model            -->

                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Le lorem ipsum est, en imprimerie, une suite de mots sans signification
                                                utilisée à titre provisoire pour calibrer une mise en page, le texte
                                                définitif venant remplacer le faux-texte dès qu'il est prêt ou que la
                                                mise en page est achevée. Généralement, on utilise un texte en faux
                                                latin, le Lorem ipsum ou Lipsum.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--    Model  end          -->
                                <!--    Model    2        -->

                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Le lorem ipsum est, en imprimerie, une suite de mots sans signification
                                                utilisée à titre provisoire pour calibrer une mise en page, le texte
                                                définitif venant remplacer le faux-texte dès qu'il est prêt ou que la
                                                mise en page est achevée. Généralement, on utilise un texte en faux
                                                latin, le Lorem ipsum ou Lipsum.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--    Model  end          -->


                            </div>



                            <button type="button" class="btn btn-warning" onclick="calcul()">Calculer le prix
                                final</button>



                            <div class=" select-option mt-3 col-12" id="prix_show" style="display: none">

                                <div class="col-12">
                                    <label class="h1">Total TTC :</label>
                                </div>
                                <div class="col-12 text-center">
                                    <h6 id="prixxx" class=""
                                        style="width: 100%;font-size: 30px;border: 2px solid orange;border-radius: 5px">
                                    </h6>
                                    <button class="btn" type="submit"
                                        style="border-radius: 7px;color:white;background-color: rgba(197, 151, 24, 0.829)">Continuer
                                        <i class="fad fa-location-arrow" style="color: white"></i> </button>
                                    <input type="text" name="prixx" id="prixx" hidden>
                                </div>

                            </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <input id="do_change" type="hidden" value="" />

</section>


<script>
    function show_trans() {
        var str = document.getElementById("trans_first").value;


        if (str === "oui") {

            document.getElementById("champ").style.display = "";

        }

    }

    show_trans();
</script>

<script>
    function convert_char() {

        var para_summer = document.getElementById('summernote').value;

        //remove code brakes and tabs
        para_summer = para_summer.replace(/\n/g, "");
        para_summer = para_summer.replace(/\t/g, "");

        //keep html brakes and tabs
        para_summer = para_summer.replace(/<\/td>/g, "\t");
        para_summer = para_summer.replace(/<\/table>/g, "\n");
        para_summer = para_summer.replace(/<\/tr>/g, "\n");
        para_summer = para_summer.replace(/<\/p>/g, "\n");
        para_summer = para_summer.replace(/<\/div>/g, "\n");
        para_summer = para_summer.replace(/<\/h>/g, "\n");
        para_summer = para_summer.replace(/<br>/g, "\n");
        para_summer = para_summer.replace(/<br( )*\/>/g, "\n");


        // console.log(para_summer);

        // //parse html into text
        // var dom = (new DOMParser()).parseFromString('<!doctype html><body>' + para_summer, 'text/html');
        // return dom.body.textContent;

        document.getElementById('para_clear').innerHTML = para_summer;

    }

    convert_char();
</script>


<script>
    function calcul() {
        var business = parseFloat(document.getElementById('flexRadioDefault1').value);
        econnomique = parseFloat(document.getElementById('flexRadioDefault2').value);
        date = parseFloat(document.getElementById('date').value);
        child = parseFloat(document.getElementById('enfant').value);
        adulte = parseFloat(document.getElementById('adulte').value);
        kids = parseFloat(document.getElementById('kids').value);
        // prix_ini = parseFloat(document.getElementById('prix_ini').value);
        str = document.getElementById("trans_first").value;

        assur_annul = parseFloat(document.getElementById("assur_annul").value);
        assur_mult = parseFloat(document.getElementById("assur_mult").value);
        null_assur = parseFloat(document.getElementById("null_assur").value);




        if (str = "oui" && date > 0) {

            if (business.checked) {
                calc = business + (child * kids) + (date * adulte);
            } else {
                calc = econnomique + (child * kids) + (date * adulte);
            }


            if (document.getElementById("assur_annul").checked) {
                calc_final = calc + assur_annul;
                console.log(calc_final);

            }
            if (document.getElementById("assur_mult").checked) {
                calc_final = calc + assur_mult;
                console.log(calc_final);
            }
            if (document.getElementById("null_assur").checked) {
                calc_final = calc + null_assur;
                console.log(calc_final);
            }


            document.getElementById('show_msg').innerHTML = "";
            document.getElementById("prix_show").style.display = "";
            document.getElementById('prixxx').innerHTML = calc_final.toFixed(2) + " " + "€";
            document.getElementById('prixx').value = parseFloat(calc_final);

        }

        if (str = "non" && date > 0) {


            calc = (date * adulte) + (child * kids);

            if (document.getElementById("assur_annul").checked) {
                calc_final = calc + assur_annul;


            }
            if (document.getElementById("assur_mult").checked) {
                calc_final = calc + assur_mult;

            }
            if (document.getElementById("null_assur").checked) {
                calc_final = calc + null_assur;

            }



            document.getElementById('show_msg').display = "none";
            document.getElementById("prix_show").style.display = "";
            document.getElementById('prixxx').innerHTML = calc_final.toFixed(2) + " " + "€";
            document.getElementById('prixx').value = calc_final.toFixed(2);



        } else {
            document.getElementById('show_msg').innerHTML =
                "<span class='ml-4' style='color:red'> il faut choisir une date svp &#x26D4;  </span>";

        }




    }
</script>

<script>
    function myNewFunction() {
        var sel = document.getElementById("date");
        var text = sel.options[sel.selectedIndex].text;

        var date = document.getElementById('date_dispo').value = text;
    }
</script>
<script>
    function cityChange() {

        var do_change = document.getElementById('do_change').value;
        if (do_change == '') {
            do_change = 'ok';
            const city = document.getElementById('city').value;
            //alert(city);
            $.ajax({
                url: '/offre/' + city, //This is the current doc
                type: "GET",
                data: ({}),
                success: function(response) {
                    console.log('yes !!');
                    console.log(JSON.parse(response));
                    var data = JSON.parse(response);
                    document.getElementById('date').innerHTML =
                        '<option selected="" value="0">📅 Dates disponibles </option>';
                    for (i = 0; i < data.length; i++) {
                        document.getElementById('date').innerHTML = document.getElementById('date')
                            .innerHTML +
                            `<option value="` + data[i]['prix'] + `">` + data[i]['date'] + `</option>`;
                    }
                    // $('#date').change();
                    $("select").niceSelect('update');
                    //location.reload();
                }
            });
        } else {
            do_change = '';
        }


    }
</script>
