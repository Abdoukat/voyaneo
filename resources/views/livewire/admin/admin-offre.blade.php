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
<section class="mt-3 mb-3">
    <div class="container" style="border: 1px solid black;padding: 30px;border-radius: 20px">
        <form action="{{ route('admin.addoffre') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-6 p-5">
                    <label for="validationDefault01">selectioner un produit : </label>
                </div>
                <div class="col-6 p-5">
                    @php
                        $city = DB::table('cities')->get();
                        $product = DB::table('products')->get();
                    @endphp

                    <select class="form-control" class="selectiz" name="product_id">
                        @foreach ($product as $item)
                            <option value="{{ $item->id }}">{{ $item->slug }}</option>
                        @endforeach
                    </select>
                    <small id="passwordHelpInline" class="text-muted ml-3">
                        Must be 8-20 characters long.
                    </small>
                </div>
                <div class="col-6 p-5">
                    <label for="validationDefault01">selectioner une ville : </label>
                </div>
                <div class="col-6 p-5">
                    <select class="form-control" class="selectiz" name="city_id">
                        @foreach ($city as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <small id="passwordHelpInline" class="text-muted ml-3">
                        Must be 8-20 characters long.
                    </small>
                </div>
                <div class="col-6 p-5">
                    <label for="validationDefault01">Enter un prix :</label>
                </div>
                <div class="col-6 p-5">
                    <input type="text" class="form-control" id="validationDefault01" placeholder="First name"
                        value="" name="prix" required>
                    <small id="passwordHelpInline" class="text-muted">
                        Must be 8-20 characters long.
                    </small>
                </div>
                <div class="col-6 p-5">
                    <label for="validationDefault01">Enter une date :</label>
                </div>
                <div class="col-6 p-5">
                    <input type="text" class="form-control" id="validationDefault01" placeholder="First name"
                        value="" name="date" required>
                    <small id="passwordHelpInline" class="text-muted">
                        Must be 8-20 characters long.
                    </small>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success">ajouter offre</button>
                    <a type="button" value="" class="btn btn-info" target="blank"
                        href="{{ route('admin.city') }}">page ville</a>
                    <a type="button" value="" class="btn btn-warning" target="blank"
                        href="{{ route('admin.offre') }}">page produit</a>
                </div>
            </div>
        </form>
    </div>

</section>
