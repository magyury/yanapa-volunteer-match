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
              <a class="btn btn-lg text-white" style="background: rgb(188,41,240);
background: linear-gradient(207deg, rgba(188,41,240,1) 19%, rgba(14,44,237,1) 80%);" href="{{ url('/register') }}">Unisciti alla community</a>
            </div>
            <div class="col-md-6">
            <div class="embed-responsive embed-responsive-4by3  rounded">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/yGPmoTJDRSk?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          </div>
        </div>
    </div>
@endif

@include('groups')

@endsection





