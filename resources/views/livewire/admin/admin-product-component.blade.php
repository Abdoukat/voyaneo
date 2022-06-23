<div>
    <style>
       nav svg{
           height: 20px;
       }
       nav .hidden{
           display: block !important;
       }
    </style>
    <div class="container" style="padding: 60px 0;margin-top: 120px;margin-bottom: 120px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h2 class="mb-3">Les offres</h2>
                        <td><a class="btn btn-warning mb-3" href="{{ route('admin.addproduct') }}">Ajouter une offre</a></td>
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
                                      <td><img src="../{{$image[0]}}" alt="" height="90px" width="90px"></td>
                                      <td>{{$item->titre}}</td>
                                      <td>{{$item->slug}}</td>
                                      <td>{{$item->short_description}}</td>
                                      <td><a class="btn btn-danger" href="{{ route('admin.deleteproduct', ['slug'=>$item->slug]) }}">Supprimer</a></td>
                                  </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{$product->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
