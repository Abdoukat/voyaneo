<div>
    <style>
		<style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .imgPreview img {
            padding: 20px;
			height: 120px;
            width: 160px;
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
<div class="container mb-3 mt-4" style="border: 1px solid Black;padding: 10px" >
    <form method="POST" action="{{ route('admin.addnewproduct') }}" enctype="multipart/form-data" class="mt-5">

        @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div>
        @endif


        @csrf
                 <div class="col-lg-6 ">
                    <div class="form-group ">
                        <label>slug </label>
                        <input type="text" class="form-control" name="slug" id="slug" value="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group ">
                        <label>Titre </label>
                        <input type="text" class="form-control" name="titre" id="titre" value="">
                    </div>
                </div>



                <div class="col-12">
                    <div class="user-image mb-3 text-center">
                        <div class="imgPreview" style="background-color: beige;"> </div>
                    </div>

                    <div class="custom-file">


                        <input type="file" name="image[]" class="custom-file-input" id="images" multiple="multiple">
                        <label class="custom-file-label" for="images" style="color:rgb(8, 8, 8)"><i class="fad fa-images"></i> Choisissez l'image</label>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>short description </label>
                        {{-- <textarea name="desc_1"  class="form-control" rows="10"></textarea> --}}
                         <textarea name="short_description"   class="form-control" rows="6"></textarea>
                    </div>
                 </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description </label>
                            {{-- <textarea name="desc_1"  class="form-control" rows="10"></textarea> --}}
                             <textarea name="description" id="your_summernote" class="form-control" rows="10"></textarea>
                        </div>
                     </div>


                     <div class="row">

                        <div class="select-option col-12">
                            <label for="guest">Transport :</label>
                            <div class="form-check ml-5" >
                                <input type="radio" name="trans" class="form-check-input" id="trans_no"  value="non" onclick="desactiver()" checked>
                                <label class="form-check-label" for="sans_trans">
                                  Sans transport
                                </label>
                              </div>
                              <div class="form-check ml-5">
                                <input type="radio" name="trans"  class="form-check-input" id="trans_ok"  value="oui" onclick="show()">
                                <label class="form-check-label" for="avec_trans">
                                  Avec transport
                                </label>
                              </div>
                        </div>
                        <div>

                        </div>
                         <div class="col-lg-6">
                            <div class="form-group"  id="trans_eco" style="display: none">
                                <label>business</label>
                                <input type="text" class="form-control" name="bus"  value=""  id="business" >
                            </div>
                         </div>
                         <div class="col-lg-6" >
                            <div class="form-group" id="trans_bus" style="display: none">
                                <label>Econnomique</label>
                                <input type="text" class="form-control" name="eco" value="" id="econnomique" >
                            </div>
                         </div>
                         <div class="col-lg-4">
                            <div class="form-group">
                                <label>Prix public</label>
                                <input type="text" class="form-control" name="prix_pub" value="">
                            </div>
                         </div>
                         <div class="col-lg-4">
                            <div class="form-group">
                                <label>Prix à partir de :</label>
                                <input type="text" class="form-control" name="prix_ini" value="">
                            </div>
                         </div>


                         <div class="col-lg-4">
                            <div class="form-group">
                                <label>Enfant</label>
                                <input type="text" class="form-control" name="enfant" value="">
                            </div>
                         </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>ASSURANCE MULTIRISQUES</label>
                                <input type="text" class="form-control" name="assur_mult" value="">
                            </div>
                         </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>ASSURANCE ANNULATION</label>
                                <input type="text" class="form-control" name="assur_annul" value="">
                            </div>
                         </div>

                         <div class="col-12">
							<table class="table table-bordered" id="dynamicName">
								<tr class="table-danger">
									<th>Nom des villes :</th>
									<th>Action</th>
								</tr>
								<tr>
									<td><input type="text" name="nom_ville[]" placeholder="Enter nom ville" class="form-control" />
									</td>
									<td><button type="button" name="add" id="dynamic" class="btn btn-warning">ajouter</button></td>
								</tr>
							</table>
						  </div>

                         <div class="col-12 mt-5">
                            <table class="table table-bordered" id="dynamicAddRemove">
                                <tr>
                                    <th class="table-primary">Date aller & retour</th>
                                    <th class="table-primary">Prix</th>
                                    <th class="table-primary">Action</th>
                                </tr>
                                <tr>
                                    <td><input type="text" name="all_date[]" class="form-control" />
                                    </td>
                                    <td><input type="text" name="prix_date[]" placeholder="Enter prix" class="form-control" />
                                    </td>
                                    <td><button type="button" name="add" id="dynamic-ar" class="btn btn-info">ajouter</button></td>
                                </tr>
                            </table>
                          </div>

                          <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success " style="margin-top:20px;width:300px"><i class="fas fa-plus-circle"></i> Ajouter</button>
                            <a type="button" href="{{ url('product') }}" class="btn btn-primary " style="margin-top:20px;width:300px;color: white" target="blank"><i class="far fa-eye" style="color: white"></i> Voir le produit </a>

                        </div>

                     </div>














    </form>
</div>

</div>


