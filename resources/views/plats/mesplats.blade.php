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
                     <th>Intitule</th>
                     <th>Photo</th>
                     <th> prix </th>
                 </thead>
                 <tbody>
                  @foreach($job as $ac)
                  <tr >
                     <th> {{ $ac->intitule }}</th>
                     <th><img src="img/{{$ac->image}}" alt="" width="120px" height="120px" class="media-heading"></th>
                     <th> {{ $ac->prix }}</th>
                     <th> <a href="{{route('Supprimer',['idd'=>$ac->id])}}">Supprimer </a> </th>
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

  