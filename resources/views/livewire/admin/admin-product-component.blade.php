<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
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


            </div>
        </div>
    </div>
    <div class="container"
        style="padding: 60px 0;margin-top: 60px;margin-bottom: 120px;border: 2px solid black;padding: 20px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h2 class="mb-5 ">Les offres</h2>
                        <a class="btn btn-warning mb-3" href="{{ route('admin.addproduct') }}" target="blank">Ajouter
                            un
                            Produit</a>
                        <a class="btn btn-info mb-3" href="{{ route('admin.city') }}">Ajouter les
                            villes</a>
                        <a class="btn btn-success mb-3" href="{{ route('admin.offre') }}" target="blank">Ajouter une
                            offre</a>

                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-primary">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Titre</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $item)
                                    @php
                                        $image = explode('|', $item->image);
                                    @endphp
                                    <tr>
                                        <td><img src="../{{ $image[0] }}" alt="" height="90px"
                                                width="90px"></td>
                                        <td>{{ $item->titre }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td>{{ $item->short_description }}</td>
                                        <td><a class="btn btn-danger"
                                                href="{{ route('admin.deleteproduct', ['slug' => $item->slug]) }}">Supprimer</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $product->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
