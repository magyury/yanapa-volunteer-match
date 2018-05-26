@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (Auth::guest())

<div class="py-5 text-center bg-success" style="background: rgb(22,168,98);
background: linear-gradient(140deg, rgba(22,168,98,1) 4%, rgba(25,190,72,1) 38%, rgba(40,231,78,1) 51%, rgba(50,182,93,1) 69%, rgba(22,168,98,1) 97%);" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
            
            <h1 class="display-4">Buyersharing</h1>
              <p class="lead">Online shopping community</p>
              <p class="mb-3">La prima piattaforma per creare il tuo gruppo di acquisto. Scopri quanto è conveniente e facile comprare in gruppo.</p>
              <a class="btn btn-lg text-white" style="background: rgb(57,41,240);
background: linear-gradient(207deg, rgba(57,41,240,1) 9%, rgba(41,239,240,1) 44%, rgba(14,44,237,1) 80%);" href="{{ url('/register') }}">Unisciti alla community</a>
                </br>
</br> 
            </div>
            <div class="col-md-6">
            <div class="embed-responsive embed-responsive-4by3  rounded">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/yGPmoTJDRSk?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

   
@endif

@include('groups')

@endsection





