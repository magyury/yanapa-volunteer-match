@extends('layouts.app')

@section('content')

<script defer="" src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

<!-- Cover -->
<div class="d-flex align-items-center section-aquamarine py-5 cover" style="background-image: url( {{ asset('img/group.jpg') }} );background-size: 100% 100%; background-repeat: no-repeat; background-position: top; ">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-white mt-5">
          <h1 class="display-4 text-white">Buyersharing Groups</h1>
          <p class="">Crea il tuo gruppo e ottieni ottimi prezzi grazie all'elevato numero di acquirenti concentrati in un periodo di tempo limitato. &nbsp;</p>
          <a class="btn btn-lg mt-4 btn-danger" href="{{ url('/create') }}">INIZIA</a>
          <i class="d-block fa fa-angle-down pt-5 fa-3x"></i>
          <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
      </div>
    </div>
  </div>
  <!-- Parallax section -->
  <div class="py-5 section-parallax" style="background-image: url( {{ asset('img/girl-buying.jpg') }} ); background-size: 100%; background-repeat: no-repeat; background-attachment: fixed; background-position: top;">
    <div class="container my-5 bg-light p-4">
      <div class="row mx-auto">
        <div class="col-md-12">
          <h1 class="mb-3">Come funziona?</h1>
          <!-- How to participate -->
          <div class="col-md-12">
            <div class="row pb-2 text-center" style="background-color:RGB(233,234,231);font-size: 1.5em;">
              <div class="col-md-4">
                <i class="fas fa-search-plus" style="font-size:1,9em;"></i> Sceglie il tuo prodotto e crea il tuo gruppo di acquisto</div>
              <div class="col-md-4">
                <i class="fas fa-envelope" style="font-size:1,9em;"></i> Attendi mail di approvazione da parte di Buyersharing</div>
              <div class="col-md-4">
                <i class="fas fa-eye" style="font-size:1,9em;"></i> Attivazione del gruppo sulla piattaforma Buyersharing </div>
            </div>
          </div>
          <a class="btn btn-danger btn-lg m-2" href="{{ url('/create') }}">Crea il tuo gruppo é GRATIS!</a>
          <br>Tutti i gruppi vengono esaminati e devono essere conformi alle nostre
          <a href="#">Linee Guida</a>.
          <p></p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-light">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h1 class="mb-4 text-success">Benefici e caratteristiche</h1>
          <p class="lead">Noi ti aiuteremo a trovare le persone giuste per raggiungere il tuo obbietivo.
            <br>Dopo la pubblicazione del tuo gruppo, tutti i nuovi gruppi di Buyersharing vengono annunciati ai membri della community.</p>
          <div class="row text-left mt-5">
            <div class="col-md-4 my-3">
              <div class="row mb-3">
                <div class="text-center col-2">
                  <i class="d-block mx-auto fa fa-3x fa-envelope"></i>
                </div>
                <div class="align-self-center col-10">
                  <h5 class="text-secondary">
                    <b>E-mailing</b>
                  </h5>
                </div>
              </div>
              <p>L'email con l'annuncio della creazione di un nuovo gruppo viene inviata ai membri della community Buyersharing.</p>
              <p>L'email con il deal del gruppo viene inviata ai membri che hanno mostrato interesse per deals simili. </p>
            </div>
            <div class="col-md-4 my-3">
              <div class="row mb-3">
                <div class="text-center col-2">
                  <i class="d-block mx-auto fa fa-3x fa-bullhorn"></i>
                </div>
                <div class="align-self-center col-10">
                  <h5 class="text-secondary">
                    <b>SEO &amp; Web Marketing</b>
                  </h5>
                </div>
              </div>
              <p>Il tuo gruppo di acquisto verrà pubblicizato su internet e nei social network più usati. Anche e tutti i membri della community avrano la possibilità di condividere direttamente con i membri dei suoi gruppi oppure tramite social network
                e mail.</p>
            </div>
            <div class="col-md-4 my-3">
              <div class="row mb-3">
                <div class="text-center col-2">
                  <i class="d-block mx-auto fa fa-3x fa-handshake"></i>
                </div>
                <div class="align-self-center col-10">
                  <h5 class="text-secondary">
                    <b>Trattare con i fornitori</b>
                  </h5>
                </div>
              </div>
              <p>Qualora il deal desiderato no sia quelli già presenti nella piattaforma, il team di Buyersharing negoziara con il deal con i fornitori per ottenere il massimo delle trattative. Il nostro obbietivo e sempre i prezzi più vataggiosi per tutti
                i nostri membri.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
 </div>
    
@endsection