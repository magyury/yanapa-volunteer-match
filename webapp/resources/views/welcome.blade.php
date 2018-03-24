@extends('layouts.app')

@section('content')
<div class="pt-3 text-white bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-md-left text-center align-self-center my-5">
          <h1 class="display-4">Buyersharing</h1>
          <p class="lead">Online shopping community</p>
          <div class="row mt-5">
            <div class="col-md-5 col-6">
              <a href="#">
                <img class="center-block img-fluid d-block" src="https://pingendo.github.io/templates/sections/assets/download_android.png"> </a>
            </div>
            <div class="col-md-5 col-6">
              <a href="#">
                <img class="center-block img-fluid d-block" src="https://pingendo.github.io/templates/sections/assets/download_ios.png"> </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img class="img-fluid d-block mx-auto" src="{{ asset('img/three-friends-shopping-online-with-credit-card-and-laptop-lying-on-the-floor-at-home.jpg') }}"> </div>
      </div>
    </div>
</div>


<!-- SECTION SHARED ORDERS -->
@include('orders_sharings')

@endsection





