@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (Auth::guest())
    <div class="pt-3 text-white bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-md-left text-center align-self-center my-5">
              <h1 class="display-4">Buyersharing</h1>
              <p class="lead">Online shopping community</p>
              <p class="mb-3">Partecipa ai gruppi di acquisti e raggiungi il massimo degli sconti, trova i migliori deal della tua città.</p>
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





