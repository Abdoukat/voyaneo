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
                        <h2 class="mb-3">Contact</h2>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-info">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>subject</th>
                                    <th>message</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contact as $item)

                                  <tr>
                                      <td>{{$item->id}}</td>
                                      <td>{{$item->name}}</td>
                                      <td>{{$item->subject}}</td>
                                      <td>{{$item->message}}</td>

                                  </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{$contact->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

