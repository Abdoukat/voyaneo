<div>
    <style>
       nav svg{
           height: 20px;
       }
       nav .hidden{
           display: block !important;
       }
    </style>
    <div class="container" style="padding: 60px 0;margin-top: 120px;margin-bottom: 120px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h2 class="mb-3">Les commentaires</h2>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-warning">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>star</th>
                                    <th>name</th>
                                    <th>message</th>
                                    <th>action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($avis as $item)

                                  <tr>
                                      <td>{{$item->id}}</td>
                                      <td>
                                        @if (($item->star) === "1")
                                           <span style="color: gold"><i class="fas fa-star"></i></span>
                                        @elseif(($item->star) === "1 and a half")
                                         <span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
                                         @elseif(($item->star) === "2")
                                         <span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                         @elseif(($item->star) === "2 and a half")
                                         <span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
                                        @elseif(($item->star) === "3 and a half")
                                        <span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
                                        @elseif(($item->star) === "3")
                                        <span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        @elseif(($item->star) === "3 and a half")
                                        <span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
                                        @elseif(($item->star) === "4")
                                        <span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        @elseif(($item->star) === "4 and a half")
                                        <span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
                                        @elseif(($item->star) === "5")
                                        <span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        @elseif(($item->star) === "5 and a half")
                                        <span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
                                        @endif
                                    </td>
                                      <td>{{$item->email}}</td>
                                      <td>{{$item->message}}</td>
                                      <td><a class="btn btn-danger" href="{{ route('admin.deleteavis',['id'=>$item->id]) }}" >Supprimer</a></td>

                                  </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{$avis->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


