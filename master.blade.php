<!-- Stored in resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<html>
<script src="js/jquery.magnific-popup.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript"
src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
   <!-- vuejs -->
   <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<!-- bootstrap jq css -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">

    <link type="text/css" rel="stylesheet"
href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/fontawesome/4.2.0/css/font-awesome.min.css">
    <head>
        <title>BIG.NET Liège - Societe de nettoyage @yield('title')</title>
    </head>
    <body >
      <!--logo-->
        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('img/bn1.jpg') }}"/>


        @section('sidebar')
            <!--Navbar -->
            <div class="container-fluid" style="margin: 0px; padding: -10px; display: block;">
     <div class="row" style="margin-top: 10px;">
          
             <div class="col-lg-4 col-md-4 col-sm-4 ">
                <a class="navbar-brand" href="/">
                 <img src="img/bn1.jpg" width="100px" height="autp" style="margin-top: -20px;">
               </a>
             </div> 
             <div class="col-lg-8 col-md-8 col-sm-8 text-right">
                <a href="tel:+32493455187" style="font-family: bold;"><i class="fas fa-phone mr-3"></i>04 93 45 51 87</a>
         </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-default mb-1 " id="nav">
 
  <button class="navbar-toggler bg-info "  id="btn_menu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
     <!-- <li class="nav-item ">
        <a  style="font-size: 20px; " class="nav-link text-primary" href="{{ url("/acceuil") }}">Acceuil
        </a>
      </li>-->

    
      
      <li class="nav-item">
        <a  class="nav-link text-dark "  href="{{ url("/") }}"><i class="fas fa-home"></i>Acceuil</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link text-dark" href="{{ url("/services") }}"><i class="fab fa-servicestack"></i>Services</a>
      </li>

      <li class="nav-item">
        <a  class="nav-link text-dark" href="{{ url("/devis") }}"><i class="fas fa-scroll"></i>Devis</a>
      </li>

      <li class="nav-item">
        <a  class="nav-link text-dark" href="{{ url("/contacter") }}"><i class="fas fa-envelope"></i>Nous Contacter</a>
      </li>
      
      <li class="nav-item">
        <a  class="nav-link text-dark"  href="{{ url("/apropos") }}"><i class="fas fa-broom"></i>A propos</a>
      </li>
      <li class="nav-item">
        
      </li>
    </ul>
    
   
</nav>
  </div>
  <!--<div id="mydevis">
<a class="devis" href="{{ url("/devis") }}">devis</a>
</div>-->
<!--/.Navbar -->

@show

        <div class="container-fluid" >
            @yield('content')
        </div>
<!-- Footer -->
<footer class="page-footer font-small bg-dark text-white pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">


    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->

      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
     <h5 class="font-weight-bold text-uppercase mb-4 text-warning">Trouvez nous</h5>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.8956764707236!2d5.5870992152724686!3d50.62905478236116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f0accef7a461%3A0x3d508331279d8c24!2sAv.%20Francisco%20Ferrer%2026%2C%204030%20Li%C3%A8ge%2C%20Belgique!5e0!3m2!1sfr!2sma!4v1589756886373!5m2!1sfr!2sma"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4 text-warning">Address</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i>  Avenue Francisco Ferrer 26 4030 Grivegnée
</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> 
<a href="mailto:big.netliege@gmail.com" target="_blank" class="">big.netliege@gmail.com</a>
            </p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i>
              <a href="tel:+32493455187" >04 93 45 51 87</a>
            </p>
          </li>
          <li>
            <p>
              <i class="fas fa-chevron-right"></i>  TVA : 0719528677</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4 text-warning">Suivez nous</h5>

        <!-- Facebook -->
        <a type="button" class="btn-floating btn-fb" style="font-size:22px !important;">
          <i class="fab fa-facebook-f"></i>
        </a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-tw offset-2" style="font-size:22px !important;">
          <i class="fab fa-twitter "></i>
        </a>


        <!-- Google +-->
        <a type="button" class="btn-floating btn-gplus offset-2"  style="font-size:22px !important;">
          <i class="fab fa-google-plus-g" ></i>
        </a>
        
    
      </div>

      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  
  <div class="footer-copyright text-center py-3" >© 2020 Copyright:
    <a href="/"> BIG.NET</a><br>
    <h8>Dévelopé par <a href="mailto:mouad.alouan00@gmail.com" target="_blank" class="">madev</a>.</h8>
  </div>

  <!-- Copyright -->


</footer>
<!-- Footer -->
       </div> 
     </div>
    </body>
     
</html>