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
    
    @yield('page-style-files')
</head>
<body>
    <div id="app">

    <nav class="navbar navbar-expand-md bg-primary navbar-dark" style="background: rgb(54,247,89);
background: linear-gradient(90deg, rgba(54,247,89,1) 0%, rgba(187,12,230,1) 50%, rgba(95,131,207,1) 100%);">
    <div class="container" >
      <a class="navbar-brand" href="{{ url('/') }}"><i class="fa d-inline fa-lg fa-share-alt"></i><b>  B U Y E R S H A R I N G</b></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <form class="form-inline m-0 py-2">
          <input class="form-control mr-0 " style="width:70%;" type="text" placeholder="">
          <button class="btn btn-primary" type="submit">Cerca</button>
        </form>
          @if (Route::has('login'))
            <!-- Authentication Links -->
          @if (Auth::guest())
            <a class="btn navbar-btn ml-2 text-white btn-secondary" href="{{ url('/login') }}"><i class="fa fa-lg fa-user-circle"></i> Login</a>
            <a class="btn navbar-btn ml-2 text-white btn-secondary" href="{{ url('/register') }}"> Registrati</a>
          @else 
          
              <ul class="nav nav-pills justify-content-end">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} </a>
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
                  <a class="btn navbar-btn ml-2 text-white btn-secondary" href="{{ url('/home') }}"><i class="fa d-inline fa-lg fas fa-shopping-cart"></i></a>
                </li>
              </ul>

          @endif
                        
        @endif

      </div>
     
    </div>
    
  </nav>
  <!-- Categories -->
	<nav class="navbar navbar-expand-md bg-dark navbar-dark" style="background: rgb(22,168,98);
  background: linear-gradient(140deg, rgba(22,168,98,1) 40%, rgba(25,190,72,1) 59%, rgba(40,231,78,1) 85%, rgba(233,232,240,1) 100%);">
		<div class="container">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		  <div class="collapse navbar-collapse text-center justify-content-left" id="navbar3SupportedContent">
			<ul class="navbar-nav">
			  <li class="nav-item">
				<a class="nav-link" href="{{ url('/') }}">GRUPPI DI ACQUISTO</a>
			  </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ALTRE CATEGORIE </a>
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
    
    <!-- MAIN PAGE CONTENT -->
    @yield('content')

</div>

<!-- Footer -->
<div class="py-5 bg-dark text-white" style="background: rgb(22,168,98);
background: linear-gradient(140deg, rgba(22,168,98,1) 40%, rgba(25,190,72,1) 59%, rgba(40,231,78,1) 85%, rgba(233,232,240,1) 100%);">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <p class="lead">Iscriviti alla nostra newsletter</p>
          <form class="form-inline">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Your e-mail here"> </div>
            <button type="submit" class="btn btn-primary ml-3">Invia</button>
          </form>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://www.facebook.com/buyersharing/" target="_blank">
            <i class="fab fa-facebook fa-3x text-white"></i>
          </a>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://www.instagram.com/buyersharing/" target="_blank">
            <i class="fab fa-instagram text-white fa-3x"></i>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2018 Buyersharing - All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script defer="" src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    @yield('page-js-files')
    @yield('page-js-script')
</body>
</html>
