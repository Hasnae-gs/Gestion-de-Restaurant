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

<div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
         
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                     
    
    <!-- end site-header --> <h2>Panier</h2>
                            <h1>
valider votre commande</h1>
                        
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->
 


<body>
     


<section class="ftco-section contact-section bg-light">
   <div class="container">
   @if(session()->has('message'))
   <div class='container mb-2' style=" padding-top : 200px;" >
      <div class="card bg-info text-white shadow ">
         <div class="card-body">
            {{session()->get('message')}}
         </div>
      </div>
   </div>
   @endif

   <div class="container">
   <div class="card">
   <div class="card-body">
   <div class="d-flex bd-highlight mb-2 ml-2 mt-2" style="">
     
   </div>
   <div class="d-flex bd-highlight mb-4 ml-4 mt-4">
      <div class="row">
         @foreach($dt as $ac)
         <div class="col-md-3">
            <div class="row p-4 flex-fill bd-highlight">
               <div class="m-3">
                    <img src="img/{{$ac->image}}" alt="" width="120px" height="120px" class="media-heading">
                  <p class="media-heading">{{ $ac->intitule }}</p>

                  <p class="media-heading">{{ $ac->prix }}DH</p>
               
                  </p>
                  <br/> <br/>
               </div>
            </div>

         </div>


         @endforeach
          <a class="btn btn-danger" href="{{route('valider')}}">continuer la commmande</a></th>
         
      </div>
    
    </div>
  </div>
</div>
</div>
</div>
</section>
</div>
 <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>





                                  
                         
@endsection

  