@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

  <head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Food Funday Restaurant - One page HTML Responsive</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
   <link href="{{asset('admin/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('admin/demo/demo.css')}}" rel="stylesheet" />
    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>
  

   <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          
         
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
              
             
               
           <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
               </form>
                </div>
                                                 

              </li>
             
            </ul>
          </div>
        </div>
      </nav>

    <div id="site-header">
         <div class="book-btn" align="center">
                 <a href="add_res" class="table-btn hvr-underline-from-center">Reserver une table</a>
                                </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">   
                                  <li> <a  href="mes_commmandes">
                                        <img src="images/images.png" alt="">
                                    </a>          </li>                      
                                    <li></li>
</ul>
                          
        <!-- end header -->
    </div>


   <div class="container"align="center" >
   <div class="row"align="center" >
      <div class="col-md-12 col-lg-8 mb-5"align="center" >
        
         <div class="s010"align="center">
            <form method="get" action="{{route('client')}}">
               <div class="inner-form"align="center" >
                  <div class="advance-search">
                     <div class="row">
                        <div class="input-field">
                           <div class="row third">
                              <select type="text" name="search" class="table-btn hvr-underline-from-center" placeholder="type_plat" align="center" >
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
                         <div class="book-btn" align="center">
                              <button type="submit" class="table-btn hvr-underline-from-center"><span ></span>chercher</button>
                           </div>
                        <div class="row third">
                          
                         
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>

  

       
               @foreach($data as $ac)
                                    <div class="offer-item">
                                        <img src="img/{{$ac->image}}" >
                                        <div>
                                            <h3>{{ $ac->intitule }}</h3>
                                            <p>
                                               {{ $ac->description }}
                                            </p>
                                        </div>
                                       {{ $ac->n_calories }}kcal
                                        <span class="offer-price">{{ $ac->prix }}DH</span>
                                    </div>

                                     <a class="btn btn-danger" href="{{route('commmander',['idd'=>$ac->id])}}">commmander</a></th>


               
                  @endforeach
            </tbody>
         </table>


         </div>

 

      
   </div>
</div>
</section>


    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>





                                  
                         
@endsection