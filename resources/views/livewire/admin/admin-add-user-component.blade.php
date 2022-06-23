<div class="container mb-5">
    <div class="row justify-content-center ">
        <div class="col-6">
                  <div class="user text-center ">
                     <i class="fas fa-user-circle" style="font-size: 120px"></i>
                  </div>
         <form action = "{{ route('admin.adduser') }}" method="post" enctype="multipart/form-data">

             {{ csrf_field() }}

                             <div class="container">
                                 <div class="form-group">
                                     <label for="exampleFormControlInput1">Nom</label>
                                     <input type="text" class="form-control" name="name"  value="" placeholder="Nom">
                                   </div>
                                   <div class="form-group">
                                     <label for="exampleFormControlInput1">Email</label>
                                     <input type="email" class="form-control" name="email"  value="" placeholder="Email">
                                   </div>

                                   <div class="form-group">
                                     <label for="exampleFormControlInput1">password</label>
                                     <input type="password" class="form-control" name="password"   value="" placeholder="password" >
                                   </div>
                                   <hr>
                                   <div class="form-check mb-3">
                                     <input class="form-check-input" type="radio" name="utype"  value="ADM">
                                     <label class="form-check-label" for="flexRadioDefault1">
                                       Admin
                                     </label>
                                   </div>
                                   <div class="form-check">
                                     <input class="form-check-input" type="radio" name="utype" value="USR" checked>
                                     <label class="form-check-label" for="flexRadioDefault2">
                                       Client
                                     </label>
                                   </div>
                                   <hr>



                                     <button type="submit" name="send" class="btn btn-success  btn-block">Ajouter</button>
                             </div>


         </form>


        </div>


     </div>
</div>
