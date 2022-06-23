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

.nice-select .list { max-height: 150px; overflow: scroll; }

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
        <div class="col-md-4 border-right"  style=" background: linear-gradient(40deg, #90c2ca, #b850c2);border-radius: 20px">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                @if (Auth::user()->profile_photo_path === null)
                <img src="../../profil/avatar.png" alt="" style="border-radius: 50%" width="250px" height="250px">
                @else
                <img class="rounded-circle mt-5" src="{{asset(Auth::user()->profile_photo_path)}}" width="90">
                @endif

                <span class="font-weight-bold">{{Auth::user()->name}}</span><span class="text-black-50">{{Auth::user()->email}}</span>
                <span>{{Auth::user()->ville}}</span>
            </div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back">
                        {{-- <a href="{{ url('shop') }}"><h6>Retour au site</h6></a> --}}
                    </div>

                </div>
                <form method="POST" action="{{ route('user.edit') }}">
                    @if(session('success'))
                    <div class="alert alert-success">
                    {{ session('success') }}
                    </div>
                    @endif
                    @csrf
                        <div class="row mt-2">
                            <div class="col-md-6"> <select id="inputTitre1" name="genre" required>
                                <option selected>Civilité</option>
                                <option value="Monsieur">Mr</option>
                                <option value="Madame">Mme</option>
                              </select>
                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Nom" value="{{Auth::user()->name}}" name="name"></div>
                            <div class="col-md-6"><input type="text" class="form-control" value="" placeholder="Prénom" name="prenom"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Email" value="{{Auth::user()->email}} "disabled>
                            <input type="text" class="form-control" placeholder="Email" value="{{Auth::user()->email}} " name="email" hidden></div>
                            <div class="col-md-6"><input type="text" class="form-control" value="" placeholder="Téléphone" name="phone"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><input type="text" class="form-control" placeholder="Adress" value="" name="address"></div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Code postal" value="" name="code_postal"></div>
                            <div class="col-md-6"><input type="text" class="form-control" value="" placeholder="Ville" name="ville"></div>
                        </div>
                        <div class="row mt-3">

                            <div class="row mt-3">
                                <label for="date_birth">Date de naissance</label>
                                <div class="col-2">
                                    <select id="day"  class="form-control list day" onchange="getalldate()">
                                        <option value="">Jour</option>
                                    @php
                                           for ($j=1; $j <= 31; $j++) {
                                            echo "<option value=\"$j\">$j</option>";
                                            }
                                    @endphp
                                    </select>
                                </div>
                                <div class="col-2">
                                    <select id="month"  class="form-control list month" onchange="getalldate()">
                                        <option value="">Mois</option>
                                        @php
                                            for ($f=1; $f <= 12; $f++) {
                                            echo "<option value=\"$f\">$f</option>";
                                            }
                                        @endphp
                                    </select>

                                </div>
                                <div class="col-2">
                                    <select id="year"  class="form-control list year" onchange="getalldate()">
                                        <option value="">Année</option>
                                        @php
                                            for ($k=2022; $k >= 1960; $k--) {
                                            echo "<option value=\"$k\">$k</option>";
                                            }
                                        @endphp
                                    </select>
                                </div>
                                <input type="hidden" name="date_birth" value="" id="date_birth">
                            </div>

                        </div>
                        <div class="row mt-3" hidden>
                            <div class="file-input col-md-6">
                                <input type="file" id="file" class="file" value="" name="image">
                                <label for="file">Ajouter une image</label>
                            </div>
                        </div>
                        <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit">Enregistrer les modifications</button></div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>

    function getalldate() {



        var day = document.getElementById('day').value;

            month = document.getElementById('month').value;

            year = document.getElementById('year').value;




    document.getElementById('date_birth').value = day+"/"+month+"/"+year ;
    }

</script>
