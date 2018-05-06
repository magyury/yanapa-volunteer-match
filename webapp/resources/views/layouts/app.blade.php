<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}: gruppi di acquisti online</title>

    <!-- PAGE settings -->
    <link rel="icon" href="{{ asset('icon/favicon.png') }}">
    
    <meta name="author" content="Buyersharing">
    <!-- CSS dependencies 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    -->
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/wireframe.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/offcanvas.css') }}" type="text/css">

    @yield('page-style-files')
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md bg-primary navbar-dark" style="background: rgb(54,247,89);
background: linear-gradient(90deg, rgba(54,247,89,1) 0%, rgba(187,12,230,1) 50%, rgba(95,131,207,1) 100%);">
    <div class="container" >
      <a class="navbar-brand" href="{{ url('/') }}"><i class="fa d-inline fa-lg fa-share-alt"></i><b>  Buyersharing</b></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <form class="form-inline m-0 py-2">
          <input class="form-control mr-0 " style="width:70%;" type="text" placeholder="">
          <button class="btn btn-dark text-sm-left" type="submit">Cerca</button>
        </form>
          @if (Route::has('login'))
            <!-- Authentication Links -->
          @if (Auth::guest())
            <a class="btn navbar-btn ml-2 text-white" href="{{ url('/login') }}"><i class="fa fa-lg fa-user-circle"></i> Login</a>
            <a class="btn navbar-btn ml-2 text-white" href="{{ url('/register') }}"> Registrati</a>
          @else 
          
              <ul class="nav nav-pills justify-content-end">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} </a>
                  <div class="dropdown-menu">
                    
                    <a class="dropdown-item" href="{{ route('home') }}">
                      <i class="fa d-inline fa-bg fa-users"></i> I miei gruppi            
                    </a>
                    <a class="dropdown-item" href="{{ route('home') }}">
                      <i class="fa d-inline fa-bg fa-user"></i> Il mio profilo            
                    </a>
                   
                    <div class="dropdown-divider"></div>
                   
                    <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                   
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                    </form>

                  </div>
                </li>
                <!-- Cart -->
                <li>
                  <a class="btn navbar-btn ml-2 text-white btn-dark" href="{{ url('/home') }}"><i class="fa d-inline fa-lg fas fa-shopping-cart"></i></a>
                </li>
              </ul>

          @endif
                        
        @endif

      </div>
     
    </div>
    
  </nav>
  <!-- Categories 
	<nav class="navbar navbar-expand-md bg-dark navbar-dark" >
		<div class="container">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		  <div class="collapse navbar-collapse text-center justify-content-left" id="navbar3SupportedContent">
			<ul class="navbar-nav">
			  <li class="nav-item">
				<a class="nav-link  text-white" href="{{ url('/') }}">GRUPPI DI ACQUISTO</a>
			  </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ALTRE CATEGORIE </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(231,233,232);">
              <a class="dropdown-item" href="#">Abbonamenti</a>
              <a class="dropdown-item" href="#">Accademy</a>
              <a class="dropdown-item" href="#">Arte</a>
              <a class="dropdown-item" href="#">Luxury</a>
              <div class="dropdown-divider" style="border-color:#808080;"></div>
              <a class="dropdown-item" href="#">I gruppi più visti</a>
              <a class="dropdown-item" href="#">I deal più acquistati</a>
              <a class="dropdown-item" href="#">Nuovi gruppi</a>
            </div>
          </li>
        <a class="btn navbar-btn btn-danger" href="{{ url('/create') }}">Crea il tuo gruppo</a>
			</ul>
			
		  </div>
		</div>
    </nav>

    -->

    <!-- canvas off -->
    <div class="nav-scroller bg-white box-shadow">
      <nav class="nav nav-underline">
        <a class="nav-link text-dark font-weight-bold" style="margin-left:150px;" href="{{ url('/') }}">
          Nuovi gruppi
          <span class="badge badge-pill bg-light align-text-bottom">27</span>
        </a>
        <a class="nav-link text-dark font-weight-bold" href="#">Sport</a>
        <a class="nav-link text-dark font-weight-bold" href="#">Design</a>
        <a class="nav-link text-dark font-weight-bold" href="#">Auto &amp; Moto</a>
        <a class="nav-link text-dark font-weight-bold" href="#">Kids</a>
        <a class="nav-link text-dark font-weight-bold" href="#">Tecnologia</a>
        <a class="nav-link text-dark font-weight-bold" href="#">Servizi</a>
        <a class="nav-link text-dark font-weight-bold" href="#">Casa</a>
        <a class="nav-link text-dark font-weight-bold" href="#">Benessere</a>
        <a class="nav-link text-dark font-weight-bold" href="#">Altre categorie</a>
        <a class="nav-link text-white" style="background: rgb(245,61,126);
background: linear-gradient(207deg, rgba(245,61,126,1) 19%, rgba(111,113,234,1) 67%);" href="{{ url('/create') }}">Crea il tuo gruppo</a>
      </nav>
    </div>

    <!-- ./ canvas off -->
    
    <!-- MAIN PAGE CONTENT -->
    @yield('content')

</div>

  <!-- footer -->
  <div class="bg-dark text-white" >
    <div class="container">
      <div class="row">
        <div class="py-4 col-md-3">
          <h2 class="mb-4 text-white">Buyersharing</h2>
          <ul class="list-unstyled">      
            <a href="#" class="text-white">Chi siamo
            </br>
            <a href="#" class="text-white">Partners
            </br>
            <a href="#" class="text-white">Jobs</a>
            </br>
            <a href="#" class="text-white">Stampa</a>
            </ul>
          
        </div>
        <div class="py-4  col-md-3">
          <h2 class="mb-4 text-white">I tuoi diritti</h2>
          <ul class="list-unstyled">
            <a href="#" class="text-white">Assistenza clienti</a>
            </br>
            <a href="#" class="text-white">FAQ</a>
            </ul>
        </div>
        <div class="py-4 col-md-3">
          <h2 class="mb-4">Contatti</h2>
          <p>
            <a href="tel:+339 - 388 888 2222" class="text-white">
              <i class="fas mr-3 text-secondary fa-phone"></i>+39</a>&nbsp;- 339 888 2222</p>
          <p>
            <a href="mailto:info@pingendo.com" class="text-white">
              <i class="far mr-3 text-secondary fa-envelope"></i>info@buyersharing.com</a>
          </p>
          <p>
              <a href="https://goo.gl/maps/YsubV2Gi6vp" class="text-white" target="_blank">
              <i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>Milano, ITALIA</a>

              <div class="row">
            <div class="col-md-6 align-self-center">
              <a href="https://www.facebook.com/buyersharing/" target="_blank">
                <i class="fab fa-facebook fa-3x text-white"></i>
              </a>
            </div>
            <div class="col-md-6 align-self-center">
              <a href="https://www.instagram.com/buyersharing/" target="_blank">
                <i class="fab fa-instagram text-white fa-3x"></i>
              </a>
            </div>
          </div>
           
        </div>
        <div class="py-4 col-md-3">
          <h2 class="mb-4 text-light">Iscriviti alla newsletter</h2>
          <form>
            <fieldset class="form-group text-white">
              <label for="exampleInputEmail1">ricevi tutte le novità</label>
              <input type="email" class="form-control" placeholder="Inserisci la tua mail"> </fieldset>
            <button type="submit" class="btn btn-outline-secondary">Invia</button>
          </form>
        </div>
      </div>
      <div class="row">
      <div class="col-md-12">
      <p class="text-center text-white h4">Buyersharing crea gruppi d’acquisto consentendo il massimo risparmio ai membri della Community</p>      
      </div>
      </div>
      <div class="row">
     
        <div class="col-md-12 mt-3">
          <p class="text-center text-white">© Copyright 2018 Buyersharing - All rights reserved. </p>
          <div class="text-center">
            <a href="#" class="text-white">Termini e condizioni d'uso</a> &nbsp;&nbsp;
            
            <a href="{{url('cookiepolicy')}}" class="text-white">Cookies</a>&nbsp;&nbsp;
            
            
            <a href="https://www.iubenda.com/privacy-policy/14283139" class="iubenda-white iubenda-embed " title="Privacy Policy">Privacy Policy</a> <script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
            &nbsp;&nbsp;
            <a href="#" class="text-white">Piattaforma ODR per la risoluzione online delle controversie</a>
            </br>
            </br>
            </br>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ./ footer -->
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script defer="" src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    @yield('page-js-files')
    @yield('page-js-script')
</body>
</html>
