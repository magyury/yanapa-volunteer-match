@extends('layouts.app')

@section('content')

<script defer="" src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

<!-- Form Group -->
<div class="d-flex section-aquamarine py-3 cover" style="background-image: url({{ asset('img/community.jpg') }}); background-size:100% 900px; background-repeat: no-repeat; background-position: top;" >
    <div class="container">
      <div class="row">
        <div class="align-self-center col-md-6 text-white">
          <h1 class="text-center text-md-left display-4">Perchè comprare da solo se puoi farlo in gruppo?</h1>
        </div>
        <div class="col-md-6">
          <div class="card" style="background-color:RGB(232,233,231)">
            <div class="card-body p-3">
              <h4 class="pb-3 text-success">Crea il tuo gruppo senza nessun impegno</h4>
              <form action="https://formspree.io/magyury@hotmail.com" method="post">
                
                <div class="form-group">
                  <label><i class="fab fa-gratipay"></i> Prodotto</label>
                  <input class="form-control" placeholder="Nome del prodotto che vuoi acquistare"> </div>

                <div class="form-group">
                  <label>
                    <i class="fas fa-tag"></i> Marchio</label>
                  <input class="form-control" placeholder="Marchio del prodotto"> </div>
                
                <div class="form-group">
                  <label><i class="far fa-check-circle"></i> Prezzo suggerito</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="price-suggested">EUR</span>
                    </div>
                    <input type="number" id="inlineFormInputGroup" placeholder="" min="100" class="form-control"> </div>
                </div>

                <div class="form-group">
                  <label><i class="far fa-comment"></i> Descrizione del prodotto</label>
                  <textarea placeholder="100 caratteri minimo" class="form-control"> </textarea> </div>

                  <div class="form-group">
                  <label>
                    <i class="fas fa-heart"></i> Vuoi dare un nome al tuo gruppo?</label>
                  <input class="form-control" placeholder="es: my dream"> </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Accetto <a href="#"> termini e condizioni</a>.
                    </label>
                  </div>
                <div class="text-center">
                <button type="submit" class="btn btn-block mt-2 btn-success">Crea</button>
              </div>  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('how-to-create-a-group') 
    
@endsection
