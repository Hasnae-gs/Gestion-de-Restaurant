@extends('template')

@section('content')


<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Nouvelle Publication</h4>
              <p class="card-category">Effectuer des publication des offres de jours :</p>
            </div>
            <div class="card-body">
                <form action="{{url('/save_pub')}}" method="post"  enctype="multipart/form-data" name="monform">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="des" class="bmd-label-floating">Description</label>
                        <input name="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="">
                        <label for="image" class="bmd-label-floating">Fichier:</label>
                        <input id="image" type="file" class="form-control-file"  name="image" required>
                      </div>
                      
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary pull-right">Ajouter</button>
                  <div class="clearfix"></div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection