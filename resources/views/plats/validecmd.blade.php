@extends('template')

@section('content')

<div class="content">
  
       <div class="col-md-12">
         <div class="card">
           <div class="card-header card-header-primary">
             <h4 class="card-title ">Plats  : </h4>
             <p class="card-category">Les différents plats disponibles :</p>
           </div>
           <div class="card-body">
             <div class="table-responsive">
               <table class="table">
                 <thead class=" text-primary">
                     <th>Adresse</th>
                     <th>Plat</th>
                     <th> Téléphone </th>
                     <th> Prix </th>

                 </thead>
                 <tbody>
                  @foreach($dt as $ac)
                  <tr >
                     <th> {{ $ac->adresse }}</th>
                     <th>{{ $ac->intitule}}</th>
                     <th> {{ $ac->tele }}</th>
                     <th>  {{ $ac->prix }}</th>
                    
                    
                    <th> <a class="btn btn-light" href="{{route('traiter',['idd'=>$ac->id])}}">Livrer la commande </a> </th>
                  </tr>
                  @endforeach
                  

                 </tbody>
               </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

  

























