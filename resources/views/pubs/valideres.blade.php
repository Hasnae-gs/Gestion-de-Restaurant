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
                     <th>tele</th>
                     <th> repat </th>
                     <th> date </th>
                     <th> temps </th>
                     <th> nombre de personnes </th>

                 </thead>
                 <tbody>
                  @foreach($job as $ac)
                  <tr >
                     <th> {{ $ac->tele }}</th>
                     <th> {{ $ac->repat }}</th>
                     <th> {{ $ac->date_r }}</th>
                     <th> {{ $ac->temps }}</th>
                     <th> {{ $ac->nbr }}</th>
                     <th> <a href="{{route('valide',['idd'=>$ac->id])}}"> valider </a> </th>
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

  