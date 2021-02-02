 <!DOCTYPE html>
<html lang="en">

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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <section>

 <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
    <form action="{{url('/save_res')}}" method="post"  enctype="multipart/form-data" name="monform">


                  
                        @csrf
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
                        Reservations            
                    </h2>
                   
                        </div>
                        <h4 class="form-title">ajouter votre reservation</h4>
                        <p>nous serons toujours là pour vous</p>

                            
                            <!-- end col -->
                           
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="number" name="nbr" id="phone" placeholder=" nbr.">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="repat" id="repat" class="selectpicker">
                                        <option selected disabled>repat</option>
                                         <option value="Petit déjeuner">Petit déjeuner </option>
                                        <option value="Brunch">Brunch</option>
                                        <option value="déjeuner">déjeuner </option>
                                        <option value="dîner">dîner</option>
                                        <option value=" Le Ftour"> Le Ftour</option>
                                        <option value="Goûter">Goûter</option>



                                       
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="date" name="date_r" id="date_r" placeholder="Date" required="required" data-error="Date is required." />
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                               <div class="form-box">
                                    <input type="text" name="temps" id="time-picker" placeholder="temps" required="required" data-error="Time is required." />
                                </div>
                            </div>
                            <!-- end col -->
                            
                            <!-- end col -->

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    
                         

 <button class="hvr-underline-from-center" type="submit" value="valider" id="submit">valider </button
                                </div>
                            </div>

                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">




                             

                            <!-- end col -->
                       
                        <!-- end form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div></div></div></form>
    </div>
    <!-- end reservations-main -->
</section>
<section align="center">
 <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit"><a href=href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('se deconnecter') }}
            </a>
             </button>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
             <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit"><a href="{{ route('client') }}">menu
              
            </a>
             </button>

                                
                            </section>
       <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>