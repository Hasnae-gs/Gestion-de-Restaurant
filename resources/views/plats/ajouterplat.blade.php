@extends('template')

@section('content')


<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Nouveau Plat</h4>
              <p class="card-category">Completer ce formulaire pour ajouter un nouveau plat :</p>
            </div>
            <div class="card-body">
                <form action="{{url('/save_plat')}}" method="post"  enctype="multipart/form-data" name="monform">
                    @csrf
                    <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label for="intitule" class="bmd-label-floating">Intitule</label>
                            <input name="intitule" type="text" class="form-control @error('intitule') is-invalid @enderror">
                          </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                              <label class="bmd-label-floating">Type de Plat:</label>
                              <select id="type_plat" type="text" class="form-control @error('type_plat') is-invalid @enderror" name="type_plat"  required autocomplete="type_plat" autofocus>
                                <option value="">type de plat</option>
                                <option value="Entrées">Entrées</option>
                                <option value="Plats principaux">Plats principaux</option>
                                <option value="À-côtés">À-côtés</option>
                                <option value="Desserts">Desserts</option>
                                <option value="Soupes">Soupes </option>
                                <option value="Sandwichs">Sandwichs</option>
                                <option value="Boissons">Boissons et cocktails</option>
                             </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label  for="description" class="required" class="bmd-label-floating">N° Calories :</label>
                              <input id="n_calories" type="float" class="form-control @error('n_calories') is-invalid @enderror"  name="n_calories"  required> Kcal
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label  for="description" class="required" class="bmd-label-floating">Description</label>
                                <input  id="description"  type="text" class="form-control @error('description') is-invalid @enderror" name="description"  required>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="prix"class="bmd-label-floating">Prix</label>
                                  <input id="prix" type="float" class="form-control @error('prix') is-invalid @enderror" name="prix"  required > DH
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="">
                                  <label for="image" class="bmd-label-floating">Image</label>
                                  <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" required>
                                </div>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Ajouter</button>
                    <div class="clearfix"></div>
                  </form>   
            </div></div></div></div></div></div>                   
@endsection