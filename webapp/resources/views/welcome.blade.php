@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (Auth::guest())
    <div class="pt-3 text-white bg-primary" style="background: rgb(61,65,245);
background: linear-gradient(239deg, rgba(61,65,245,1) 1%, rgba(159,61,245,1) 19%, rgba(240,163,86,1) 45%, rgba(111,113,234,1) 67%, rgba(223,234,111,1) 83%, rgba(111,113,234,1) 94%);">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-md-left text-center align-self-center my-5">
              <h1 class="display-4">Buyersharing</h1>
              <p class="lead">Online shopping community</p>
              <p class="mb-3">La prima piattaforma per creare il tuo gruppo di acquisto. Scopri quanto è conveniente e facile comprare in gruppo.</p>
              <a class="btn btn-lg btn-dark" href="{{ url('/register') }}">Unisciti alla community</a>
            </div>
            <div class="col-md-6">
              <img class="img-fluid d-block mx-auto" src="{{ asset('img/three-friends-shopping-online-with-credit-card-and-laptop-lying-on-the-floor-at-home.jpg') }}"> </div>
          </div>
        </div>
    </div>
@endif

@include('groups')

@endsection





