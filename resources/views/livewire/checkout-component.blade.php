<style>
    .nice-select .list {
        max-height: 150px;
        overflow: scroll;

    }

    .obli {
        color: red;
        font-size: 20px;
    }

    .error {
        border: 1px solid red;
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
                    <a href="{{ route('order.show') }}"><i class="fas fa-shopping-basket" style="color: #ce9a67"></i>
                        Mes réservations</a>
                </div>
            </div>

        </div>
    </div>
</div>
</header>
<section class="destinations-area section-gap pb-5 mt-5">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <form action="{{ route('paiment.info') }}" method="post" onsubmit="return checkSelect()">
        @csrf
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 ">
                    <div class="row d-flex justify-content-center">

                        <div class="col-lg-12 col-sm-12  p-5">
                            <div class="single-destinations"
                                style="border: 1px solid rgba(134, 120, 120, 0.753);padding: 20px">
                                <div class="details">
                                    <h4 class="title-bor mb-4 ligne">Informations de facturation</h4>
                                    <center>
                                        <div id="show" class="alert alert-danger" style="display: none" role="alert">
                                        </div>
                                    </center>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <label for="inputName">Civilité <span
                                                    class="obli">*</span></label>
                                            <select id="civi" name="genre" class="form-group">

                                                <option value="Monsieur">Mr</option>
                                                <option value="Madame">Mme</option>
                                            </select>

                                        </div>

                                        <div class="form-group col-md-12" id="empty_civi"
                                            style="display: none;font-size: 15px"></div>

                                        <div class="form-group col-md-4">
                                            <label for="inputName">Nom <span class="obli">*</span></label>
                                            <input type="text" class="form-control" id="in_first_name"
                                                name="first_name" placeholder="" value="{{ Auth::user()->name }}"
                                                required>
                                            <div class="form-group" id="show-msg1"
                                                style="display: none;font-size: 15px"></div>
                                        </div>


                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4">Prénom <span
                                                    class="obli">*</span></label>
                                            <input type="text" class="form-control" id="in_last_name" name="last_name"
                                                placeholder="" value="<?php
                                                if (empty($profil->prenom)) {
                                                    echo '';
                                                } else {
                                                    echo $profil->prenom;
                                                }
                                                ?>" required
                                                onchange="alert_off()">
                                            <div class="form-group" id="show-msg2"
                                                style="display: none;font-size: 15px"></div>
                                        </div>


                                        {{-- <div class="col-4">
                                            <label for="inputZip">Date de naissance <span
                                                    class="obli">*</span></label>
                                            <input type="text" class="form-control" placeholder="JJ/MM/AAAA"
                                                id="in_date_birth" name="date_birth" value="<?php
                                                if (empty($profil->date_birth)) {
                                                    echo '';
                                                } else {
                                                    echo $profil->date_birth;
                                                }
                                                ?>"
                                                required>
                                            <div class="form-group" id="show-msg8"
                                                style="display: none;font-size: 15px"></div>
                                        </div> --}}
                                        <div class="form-group col-6">
                                            <label for="inputPhone4">Téléphone <span
                                                    class="obli">*</span></label>
                                            <input type="text" class="form-control" id="in_phone" name="phone"
                                                placeholder="" value="<?php
                                                if (empty($profil->phone)) {
                                                    echo '';
                                                } else {
                                                    echo $profil->phone;
                                                }
                                                ?>" required>
                                            <div class="form-group" id="show-msg3"
                                                style="display: none;font-size: 15px"></div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="inputEmail">Email <span class="obli">*</span></label>
                                            <input type="text" class="form-control" id="in_email" placeholder=""
                                                name="email" value="{{ Auth::user()->email }}" required>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Adresse <span class="obli">*</span></label>
                                        <input type="text" class="form-control" id="in_address" placeholder=""
                                            name="address" value="<?php
                                            if (empty($profil->address)) {
                                                echo '';
                                            } else {
                                                echo $profil->address;
                                            }
                                            ?>" required>
                                        <div class="form-group" id="show-msg5"
                                            style="display: none;font-size: 15px"></div>
                                    </div>

                                    <div class="form-row">

                                        <div class="col-4">
                                            <label for="inputCity">Ville <span class="obli">*</span></label>
                                            <input type="text" class="form-control" placeholder="Ville" id="in_ville"
                                                name="ville" value="<?php
                                                if (empty($profil->ville)) {
                                                    echo '';
                                                } else {
                                                    echo $profil->ville;
                                                }
                                                ?>" required>
                                            <div class="form-group" id="show-msg6"
                                                style="display: none;font-size: 15px"></div>
                                        </div>
                                        <div class="col-4">
                                            <label for="inputZip">Code postal <span
                                                    class="obli">*</span></label>
                                            <input type="text" class="form-control" placeholder="code postal"
                                                id="in_code_postal" name="code_postal" value="<?php
                                                if (empty($profil->code_postal)) {
                                                    echo '';
                                                } else {
                                                    echo $profil->code_postal;
                                                }
                                                ?>"
                                                required>
                                            <div class="form-group" id="show-msg7"
                                                style="display: none;font-size: 15px"></div>
                                        </div>

                                    </div>



                                </div>
                            </div>
                        </div>

                        @php
                            $adulte = Session::get('reservation')['adulte'];

                            $enfant = Session::get('reservation')['enfant'];

                        @endphp

                        <input type="hidden" value="{{ $enfant }}" id="enfant_for">
                        <input type="hidden" value="{{ $adulte }}" id="adult_for">

                        @if (!empty($adulte))
                            <div class="col-lg-12 col-sm-12 p-5">
                                <div class="single-destinations">
                                    <div class="details">
                                        <div class="welike" style="box-shadow: ">

                                            <h4 class="title-bor mb-3 ligne">Informations voyageurs </h4>

                                            @for ($i = 0; $i < $adulte; $i++)
                                                @if ($i === 0)
                                                    <div class="form-row mb-3"
                                                        style="border:1px solid rgba(134, 120, 120, 0.753);padding:20px;">
                                                        <div class="col-12 mb-3">
                                                            <h5 style="color: rgb(115, 59, 167)">Adulte :</h5>
                                                        </div>
                                                        <div class="col-2">
                                                            <select id="inputTitre1" name="gender" style="width:600px">
                                                                <option value="">Civilité</option>
                                                                <option>Mr</option>
                                                                <option>Mme</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-5">
                                                            <input type="text" class="form-control" id="last_travel"
                                                                name="Last_name_travel[]" placeholder="Nom"
                                                                value="{{ Auth::user()->name }}" required>
                                                            <div class="form-group" id="show-msg9"
                                                                style="display: none;font-size: 15px"></div>
                                                        </div>
                                                        <div class="col-5">

                                                            <input type="text" class="form-control" id="first_travel"
                                                                name="First_name_travel[]" placeholder="prénom"
                                                                value="<?php
                                                                if (empty($profil->prenom)) {
                                                                    echo '';
                                                                } else {
                                                                    echo $profil->prenom;
                                                                }
                                                                ?>" required>
                                                            <div class="form-group" id="show-msg10"
                                                                style="display: none;font-size: 15px"></div>
                                                        </div>

                                                        <h5 class="col-12 mt-3 mb-3">Date de naissance</h5>
                                                        <br>
                                                        <input type="hidden" name="date_birth_travel[]"
                                                            id="date_birth_travel">
                                                        <div class="col-2">
                                                            <select id="day{{ $i }}"
                                                                class="form-control list day" onchange="getalldate()"
                                                                required>
                                                                <option value="">Jour</option>
                                                                @php
                                                                    for ($j = 1; $j <= 31; $j++) {
                                                                        echo "<option value=\"$j\">$j</option>";
                                                                    }
                                                                @endphp
                                                            </select>

                                                        </div>
                                                        <div class="col-2">
                                                            <select id="month{{ $i }}"
                                                                class="form-control list month" onchange="getalldate()"
                                                                required>
                                                                <option value="">Mois</option>
                                                                @php
                                                                    for ($f = 1; $f <= 12; $f++) {
                                                                        echo "<option value=\"$f\">$f</option>";
                                                                    }
                                                                @endphp
                                                            </select>


                                                        </div>
                                                        <div class="col-2">
                                                            <select id="year{{ $i }}"
                                                                class="form-control list year" onchange="getalldate()"
                                                                required>
                                                                <option value="">Année</option>
                                                                @php
                                                                    for ($k = 2022; $k >= 1920; $k--) {
                                                                        echo "<option value=\"$k\">$k</option>";
                                                                    }
                                                                @endphp
                                                            </select>
                                                            <div class="form-group" id="show-msg12"
                                                                style="display: none;font-size: 15px"></div>
                                                        </div>



                                                    </div>
                                                @else
                                                    <div class="form-row mb-3"
                                                        style="border: 2px solid rgb(65, 56, 56);padding:20px;border-radius:10px">
                                                        <div class="col-12 mb-3">
                                                            <h5 style="color: rgb(115, 59, 167)">Adulte :</h5>
                                                        </div>
                                                        <div class="col-2">
                                                            <select id="inputTitre1" name="gender" style="width:600px"
                                                                required="required">
                                                                <option selected>Civilité</option>
                                                                <option>Mr</option>
                                                                <option>Mme</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-5">
                                                            <input type="text" class="form-control"
                                                                name="Last_name_travel[]" placeholder="Nom" value=""
                                                                required>
                                                            <div class="form-group" id="show-msg13"
                                                                style="display: none;font-size: 15px"></div>
                                                        </div>
                                                        <div class="col-5">

                                                            <input type="text" class="form-control"
                                                                name="First_name_travel[]" placeholder="prénom" value=""
                                                                required>
                                                            <div class="form-group" id="show-msg14"
                                                                style="display: none;font-size: 15px"></div>
                                                        </div>

                                                        <h5 class="col-12 mt-3 mb-3">Date de naissance</h5>
                                                        <br>
                                                        <input type="hidden" name="date_birth_travel[]"
                                                            id="date_birth_travel">
                                                        <div class="col-2">
                                                            <select id="day{{ $i }}"
                                                                class="form-control list day" onchange="getalldate()"
                                                                required>
                                                                <option value="">Jour</option>
                                                                @php
                                                                    for ($j = 1; $j <= 31; $j++) {
                                                                        echo "<option value=\"$j\">$j</option>";
                                                                    }
                                                                @endphp
                                                            </select>

                                                        </div>
                                                        <div class="col-2">
                                                            <select id="month{{ $i }}"
                                                                class="form-control list month" onchange="getalldate()"
                                                                required>
                                                                <option value="">Mois</option>
                                                                @php
                                                                    for ($f = 1; $f <= 12; $f++) {
                                                                        echo "<option value=\"$f\">$f</option>";
                                                                    }
                                                                @endphp
                                                            </select>


                                                        </div>
                                                        <div class="col-2">
                                                            <select id="year{{ $i }}"
                                                                class="form-control list year" onchange="getalldate()"
                                                                required>
                                                                <option value="">Année</option>
                                                                @php
                                                                    for ($k = 2022; $k >= 1960; $k--) {
                                                                        echo "<option value=\"$k\">$k</option>";
                                                                    }
                                                                @endphp
                                                            </select>

                                                        </div>



                                                    </div>
                                                @endif
                                            @endfor

                                            @for ($y = 0; $y < $enfant; $y++)
                                                <div class="form-row mb-3"
                                                    style="border: 2px solid rgb(65, 56, 56);padding:20px;border-radius:10px">
                                                    <div class="col-12 mb-3">
                                                        <h5 style="color: rgb(115, 59, 167)">Enfant :</h5>
                                                    </div>

                                                    <div class="col-5">
                                                        <input type="text" class="form-control"
                                                            name="Last_name_kids[]" placeholder="Nom" value="" required>
                                                        <div class="form-group" id="show-msg18"
                                                            style="display: none;font-size: 15px"></div>
                                                    </div>
                                                    <div class="col-5">

                                                        <input type="text" class="form-control"
                                                            name="First_name_kids[]" placeholder="prénom" value=""
                                                            required>
                                                        <div class="form-group" id="show-msg19"
                                                            style="display: none;font-size: 15px"></div>
                                                    </div>

                                                    <h5 class="col-12 mt-3 mb-3">Date de naissance</h5>
                                                    <br>
                                                    <input type="hidden" name="date_birth_kids[]" id="date_birth_kids">
                                                    <div class="col-2">
                                                        <select id="day{{ $y }}"
                                                            class="form-control list day" onchange="getalldate_kids()"
                                                            required>
                                                            <option value="">Jour</option>
                                                            @php
                                                                for ($s = 1; $s <= 31; $s++) {
                                                                    echo "<option value=\"$s\">$s</option>";
                                                                }
                                                            @endphp
                                                        </select>

                                                    </div>
                                                    <div class="col-2">
                                                        <select id="month{{ $y }}"
                                                            class="form-control list month"
                                                            onchange="getalldate_kids()" required>
                                                            <option value="">Mois</option>
                                                            @php
                                                                for ($d = 1; $d <= 12; $d++) {
                                                                    echo "<option value=\"$d\">$d</option>";
                                                                }
                                                            @endphp
                                                        </select>


                                                    </div>
                                                    <div class="col-2">
                                                        <select id="year{{ $y }}"
                                                            class="form-control list year" onchange="getalldate_kids()"
                                                            required>
                                                            <option value="">Année</option>
                                                            @php
                                                                for ($h = 2022; $h >= 1960; $h--) {
                                                                    echo "<option value=\"$h\">$h</option>";
                                                                }
                                                            @endphp
                                                        </select>

                                                    </div>



                                                </div>
                                            @endfor




                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif
                    </div>
                </div>






                <div class="col-lg-4 col-sm-12 mt-5 " style="border: 1px solid rgb(65, 56, 56);height: 600px">
                    <div class="row d-flex">
                        <div class="col-12">

                            <div class="single-destinations">
                                <div class="titre text-center mb-3 mt-3">
                                    <h4 class="ligne"> Résumé de votre réservation </h4>
                                </div>

                                <div class="details " style="padding: 10px">
                                    <div class="prod_img mb-3">
                                        <img src="../{{ Session::get('reservation')['image'] }}" alt="">
                                    </div>
                                    <ul class="package-list">
                                        <li class="d-flex justify-content-between align-items-center">


                                            <input type="text" name="prix"
                                                value="{{ Session::get('reservation')['titre'] }}" hidden>
                                        </li>

                                        <li class="d-flex justify-content-between align-items-center">

                                            <h4><b
                                                    style="color: #AA8662">{{ Session::get('reservation')['prixx'] }}</b>
                                                <h6> 2 Adultes </h6>
                                            </h4>
                                            <input type="text" name="short_description"
                                                value="{{ Session::get('reservation')['short_description'] }}"
                                                hidden>

                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">

                                            <h4><b>{{ Session::get('reservation')['titre'] }}</b></h4>
                                            <input type="text" name="prix"
                                                value="{{ Session::get('reservation')['titre'] }}" hidden>

                                        </li>

                                        <hr class="hr-color">
                                        <li class="d-flex justify-content-between align-items-center mb-3">
                                            <h5 style="color: rgba(0, 0, 0, 0.925)">Assurance voyage <span
                                                    style="color: #AA8662">150 €</span></h5>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">

                                            <button type="submit" class="btn btn-log btn-block"
                                                onclick="return Validate()">Procéder au paiement</button>



                                            <input type="text" name="prix"
                                                value="{{ Session::get('reservation')['prixx'] + 10 }}" hidden>
                                            {{-- <input type="submit" class="btn btn-danger btn-block" value="Payer"> --}}
                                        </li>

                                        {{-- <li class="d-flex justify-content-between align-items-center mt-3">
                                        <a class="btn btn-danger btn-block" type="button" href="product/{{Session::get('reservation')['slug']}}">Annuler la réservation</a>
                                    </li> --}}



                                        <input type="text" name="transactionReference"
                                            value="{{ Session::get('reservation')['transactionReference'] }}" hidden>
                                        <input type="text" name="Date_expiration"
                                            value="{{ Session::get('reservation')['date_dispo'] }}" hidden>
                                        <input type="text" name="vol"
                                            value="{{ Session::get('reservation')['vol'] }}" hidden>


                                        {{-- info payment --}}

                                        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>

</section>

<script>
    function getalldate() {



        var stop = document.getElementById('adult_for').value;

        date = [];
        for (let i = 0; i < stop; i++) {

            var day = document.getElementById('day' + i).value;

            month = document.getElementById('month' + i).value;

            year = document.getElementById('year' + i).value;

            date.push(day + "/" + month + "/" + year);




        }


        var date = document.getElementById('date_birth_travel').value = date.join("|");

    }
    //  for kids //

    function getalldate_kids() {



        var stop = document.getElementById('enfant_for').value;

        date = [];
        for (let y = 0; y < stop; y++) {

            var day = document.getElementById('day' + y).value;

            month = document.getElementById('month' + y).value;

            year = document.getElementById('year' + y).value;

            date.push(day + "/" + month + "/" + year);

        }


        var date = document.getElementById('date_birth_kids').value = date.join("|");

    }
</script>
<script type="text/javascript">
    function Validate() {
        var civi = document.getElementById("civi");
        first_name = document.getElementById("in_first_name");
        last_name = document.getElementById("in_last_name");
        phone = document.getElementById("in_phone");
        email = document.getElementById("in_email");
        address = document.getElementById("in_address");
        ville = document.getElementById("in_ville");
        code_postal = document.getElementById("in_code_postal");
        date_birth = document.getElementById("in_date_birth");

        last_travel = document.getElementById("last_travel");
        first_travel = document.getElementById("first_travel");
        code_postal = document.getElementById("in_code_postal");
        date_birth = document.getElementById("in_date_birth");



        console.log(inputTitre1);
        console.log(document.getElementById("show-msg"));

        if (civi.value == "" || last_name.value == "" || phone.value == "" || address.value == "" || ville.value ==
            "" || code_postal.value == "" || date_birth.value == "" && last_travel == "" && first_travel == "") {
            //If the "Please Select" option is selected display error.
            document.getElementById('empty_civi').style.display = "";
            document.getElementById('empty_civi').innerHTML =
                "<span class='ml-4' style='color:red'> * champ obligatoire</span>";


            document.getElementById('show-msg2').style.display = "";
            document.getElementById('show-msg2').innerHTML =
                "<span class='ml-4' style='color:red'> * champ obligatoire   </span>";
            last_name.style.border = "1px solid red";


            document.getElementById('show-msg3').style.display = "";
            document.getElementById('show-msg3').innerHTML =
                "<span class='ml-4' style='color:red'> * champ obligatoire   </span>";
            phone.style.border = "1px solid red";


            document.getElementById('show-msg5').style.display = "";
            document.getElementById('show-msg5').innerHTML =
                "<span class='ml-4' style='color:red'> * champ obligatoire   </span>";
            address.style.border = "1px solid red";

            document.getElementById('show-msg6').style.display = "";
            document.getElementById('show-msg6').innerHTML =
                "<span class='ml-4' style='color:red'> * champ obligatoire   </span>";
            ville.style.border = "1px solid red";

            document.getElementById('show-msg7').style.display = "";
            document.getElementById('show-msg7').innerHTML =
                "<span class='ml-4' style='color:red'> * champ obligatoire   </span>";
            code_postal.style.border = "1px solid red";

            document.getElementById('show-msg8').style.display = "";
            document.getElementById('show-msg8').innerHTML =
                "<span class='ml-4' style='color:red'> * champ obligatoire   </span>";
            date_birth.style.border = "1px solid red";

            document.getElementById('show-msg9').style.display = "";
            document.getElementById('show-msg9').innerHTML =
                "<span class='ml-4' style='color:red'> * champ obligatoire   </span>";
            last_travel.style.border = "1px solid red";

            document.getElementById('show-msg10').style.display = "";
            document.getElementById('show-msg10').innerHTML =
                "<span class='ml-4' style='color:red'> * champ obligatoire   </span>";
            first_travel.style.border = "1px solid red";


        }



    }
</script>
