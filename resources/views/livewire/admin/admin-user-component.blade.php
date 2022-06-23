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
                        <h2 class="mb-3">User</h2>
                        <td><a class="btn btn-info mb-3" href="{{ route('admin.adduser') }}">Ajouter un utilisateur</a></td>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-primary">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>Role</th>
                                    <th>action</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)

                                  <tr>
                                      <td>{{$item->id}}</td>
                                      <td>{{$item->name}}</td>
                                      <td>{{$item->email}}</td>
                                      <td>{{$item->utype}}</td>


                                       <td><a class="btn btn-info" href="{{ route('admin.editeuser', ['id'=>$item->id]) }}">update</a></td>
                                      <td><a class="btn btn-danger" href="{{ route('admin.deleteuser', ['id'=>$item->id]) }}">supprimer</a></td>

                                  </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{$user->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


