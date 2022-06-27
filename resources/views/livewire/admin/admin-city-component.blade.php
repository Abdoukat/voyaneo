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
    <div class="col-12 mt-5 p-3" style="border: 1px solid black">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.addcity') }}" method="post">
            @csrf
            <table class="table table-bordered" id="dynamicAddRemove">
                <tr>
                    <th class="table-primary">Nom des villes</th>
                    <th class="table-primary">Action</th>
                </tr>
                <tr>
                    <td><input type="text" name="name" placeholder="Enter nom ville" class="form-control" />
                    </td>
                    <td><input type="submit" value="ajouter" class="btn btn-success"></td>
                </tr>
            </table>
        </form>
        <h1>affichage des villes </h1>
        <table class="table table-bordered" id="dynamicAddRemove">
            <tr>
                <th class="table-dark">Nom des villes</th>
                <th class="table-dark">Action</th>
            </tr>
            @php
                $city = DB::table('cities')->get();
            @endphp

            @foreach ($city as $item)
                <tr>

                    <td>{{ $item->name }}</td>
                    <td>
                        <a class="btn btn-danger"
                            href="{{ route('admin.deletecity', ['id' => $item->id]) }}">Supprimer</a>
                    </td>

                </tr>
            @endforeach

        </table>
        <div class="text-center">
            <a type="button" value="" class="btn btn-info" target="blank" href="{{ route('admin.city') }}">page
                ville</a>
            <a type="button" value="" class="btn btn-warning" target="blank"
                href="{{ route('admin.offre') }}">page produit</a>
        </div>
    </div>
</div>
