<div>
    <style>
       nav svg{
           height: 20px;
       }
       nav .hidden{
           display: block !important;
       }
    </style>
    <div class="container-fluid" style="padding: 30px 30px;margin-top: 120px;margin-bottom: 120px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h2 class="mb-3">Les commandes </h2>

                    </div>
                    <div class="panel-body">
                        <table class="table table-success table-striped ">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>prenom</th>
                                    <th>Nom</th>
                                    <th>telephone</th>
                                    <th>email</th>
                                    <th>address</th>
                                    <th>ville</th>
                                    <th>code postal</th>
                                    <th>Reference</th>

                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $item)

                                  <tr>
                                      <td>{{$item->id}}</td>
                                      <td>{{$item->first_name}}</td>
                                      <td>{{$item->last_name}}</td>
                                      <td>0{{$item->phone}}</td>
                                      <td>{{$item->email}}</td>
                                      <td>{{$item->address}}</td>
                                      <td>{{$item->ville}}</td>
                                      <td>{{$item->code_postal}}</td>
                                      <td>{{$item->transactionReference}}</td>



                                      <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal{{$item->id}}">
                                        voir plus
                                      </button></td>
                                  </tr>

                                   <!-- Modal -->
                                        <div class="modal fade " id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">commande info</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
														<label for="exampleFormControlInput1">Prenom</label>
														<input type="text" class="form-control" name="name" value="{{$item->first_name}}" placeholder="Nom" disabled>
													  </div>
													  <div class="form-group">
														<label for="exampleFormControlInput1">Nom</label>
														<input type="email" class="form-control" name="email"  value="{{$item->last_name}}" placeholder="Nom" disabled>
													  </div>

													  <div class="form-group">
														<label for="exampleFormControlInput1">telephone</label>
														<input type="text" class="form-control" name="password"   value="{{$item->phone}}" placeholder="telephone" disabled>
													  </div>


													  <div class="form-group">
														<label for="exampleFormControlInput1">email</label>
														<input type="text" class="form-control" name="cle_par" value="{{$item->email}}" placeholder="email" disabled>
													  </div>
                                                      <div class="form-group">
														<label for="exampleFormControlInput1">addresse</label>
														<input type="text" class="form-control" name="name" value="{{$item->address}}" placeholder="addresse" disabled>
													  </div>
													  <div class="form-group">
														<label for="exampleFormControlInput1">ville</label>
														<input type="email" class="form-control" name="email"  value="{{$item->ville}}" placeholder="ville" disabled>
													  </div>

													  <div class="form-group">
														<label for="exampleFormControlInput1">Code postal</label>
														<input type="text" class="form-control" name="password"   value="{{$item->code_postal}}" placeholder="code postal" disabled>
													  </div>


													  <div class="form-group">
														<label for="exampleFormControlInput1">transactionReference</label>
														<input type="text" class="form-control" name="cle_par" value="{{$item->transactionReference}}" placeholder="" disabled>
													  </div>

                                                      <div class="form-group">
														<label for="exampleFormControlInput1">prix</label>
														<input type="text" class="form-control" name="cle_par" value="{{$item->prix}}" placeholder="" disabled>
													  </div>

                                                      <div class="form-group">
														<label for="exampleFormControlInput1">Date de naissance</label>
														<input type="text" class="form-control" name="date_birth" value="{{$item->date_birth}}" placeholder="" disabled>
													  </div>

                                                      <div class="form-group">
														<label for="exampleFormControlInput1">vol</label>
														<input type="text" class="form-control" name="vol" value="{{$item->vol}}" placeholder="" disabled>
													  </div>

                                                      <div class="form-group">
														<label for="exampleFormControlInput1">voyageur prénom</label>
														<input type="text" class="form-control" name="First_name_travel" value="{{$item->First_name_travel}}" placeholder="" disabled>
													  </div>

                                                      <div class="form-group">
														<label for="exampleFormControlInput1">voyageur nom</label>
														<input type="text" class="form-control" name="Last_name_travel" value="{{$item->Last_name_travel}}" placeholder="" disabled>
													  </div>

                                                      <div class="form-group">
														<label for="exampleFormControlInput1">Les dates </label>
														<input type="text" class="form-control" name="Date_expiration" value="{{$item->Date_expiration}}" placeholder="" disabled>
													  </div>

                                                      <div class="form-group">
														<label for="exampleFormControlInput1">Id utilisateur</label>
														<input type="text" class="form-control" name="user_id" value="{{$item->user_id}}" placeholder="" disabled>
													  </div>
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>









									<div id="ModalShow{{$item->id}}" role="dialog" aria-modal="true" class="fade modal" tabindex="-1">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title">edit modal</h4>
													<button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal">

													</button>
												</div>
												<div class="modal-body">
													<div class="form-group">
														<label for="exampleFormControlInput1">Nom</label>
														<input type="text" class="form-control" name="name" value="{{$item->first_name}}" placeholder="Nom">
													  </div>
													  <div class="form-group">
														<label for="exampleFormControlInput1">Email</label>
														<input type="email" class="form-control" name="email"  value="{{$item->first_name}}" placeholder="Email">
													  </div>

													  <div class="form-group">
														<label for="exampleFormControlInput1">password</label>
														<input type="text" class="form-control" name="password"   value="{{$item->first_name}}" placeholder="password" >
													  </div>


													  <div class="form-group">
														<label for="exampleFormControlInput1">code de parrainage</label>
														<input type="text" class="form-control" name="cle_par" value="{{$item->first_name}}" placeholder="code de parrainage" >
													  </div>

														<button type="submit" name="send" class="btn btn-success  btn-block">Modifier</button>

												</div>
											</div>
										</div>
									</div>
								</form>

                                @endforeach

                            </tbody>
                        </table>
                        {{$order->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

