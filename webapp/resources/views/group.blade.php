@extends('layouts.app')

@section('content')

@section('page-style-files')
    <link rel="stylesheet" href="{{ asset('css/circle.css')}}"  type="text/css"/>
@stop

@section('page-js-files')
  <script src="{{ asset('js/group.js') }}"></script>
@stop
@section('page-js-script')
  <script>
    $(document).ready(function(){
      // your code here
    });
  </script>
@stop


<div class="py-2">
    <div class="container">
      <!-- Breadcumbs 
      <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class=" breadcrumb" style="margin-bottom:0px;margin-top:0px;background-color:RGB(233,234,231)">
            <li class="breadcrumb-item">
              <a href="{{ url('/') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">Gruppo di acquisto</li>
          </ul>
        </div>
      </div>
        -->

      <!-- Group Details -->
      <div class="row">
        <div class="col-md-12">
          <!--Brand Long Title:  -->
          <h4><strong>{{ $group['deal_title'] }}</strong></h4>
        </div>
        <div class="col-md-8">
          <!--  Product description: -->
          <h5>{{ $group['deal_description'] }}</h5>
        </div>
        <div class="col-md-4 py-1 text-center">
          <!-- Stars --><small><strong>Gruppo</strong><span class="h5"> 
          				<i class="fas fa-star" style="font-size:1,9em; color:gold"></i> 
          				<i class="fas fa-star" style="font-size:1,9em; color:gold"></i> 
          				<i class="fas fa-star" style="font-size:1,9em; color:gold"></i>
          				<i class="fas fa-star" style="font-size:1,9em; color:gold"></i> 
          				<i class="far fa-star" style="font-size:1,9em; color:gold"></i>
          				</span></small> </div>
      </div>
      <div class="row">
        <!-- Product Images -->
        <div class="col-md-8">
          <!-- Carrousel -->
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div id="carouselArchitecture" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselArchitecture" data-slide-to="0" class="active"><i></i></li>
                    <li data-target="#carouselArchitecture" data-slide-to="1"><i></i></li>
                    <li data-target="#carouselArchitecture" data-slide-to="2"><i></i></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                    <?php $deal_image_fullname = $group["deal_image_path"] . DIRECTORY_SEPARATOR . $group["deal_image_name"] ; ?>
                      <img class="d-block img-fluid" data-holder-rendered="true" src='{{asset("$deal_image_fullname")}}' style="width: 100%; height: 100%;"> </div>
                    <!-- two more images 
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="image_product_two.jpg" data-holder-rendered="true" style="height:280px;"> </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="image_product_tre.jpg" data-holder-rendered="true" style="height:280px;"> </div>
                    -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- how to participate -->
          <div class="col-md-12">
            <div class="row px-2 pt-2" style="background-color:RGB(233,234,231);">
              <h5>Come partecipare:</h5>
            </div>
            <div class="row pb-2 text-center" style="background-color:RGB(233,234,231);">
              <div class="col-md-4"> <i class="fas fa-2x fa-users" style="font-size:1,9em;"></i> Partecipa al gruppo di acquisto </div>
              <div class="col-md-4"> <i class="fas fa-2x fa-envelope" style="font-size:1,9em;"></i> Attendi mail di conferma </div>
              <div class="col-md-4"> <i class="fas fa-2x fa-truck"></i> Ricevi il prodotto </div>
            </div>
          </div>
          </br>
           <!-- ./ how to participate -->
          <!-- deal details -->
          <div class="col-md-12">
            <div>
              <h4> L'Offerta comprende</h4>
              <hr>
              <div>
                <p>Caldi divani oversize come moderne stuoie senza tempo e senza confini territoriali trovano il loro posto ideale nell’habitat moderno delle nostre case e negli ambienti oggi più frequentati. Sedute ampie con morbida imbottitura in piuma
                  nelle due versioni da 100 e 130 cm. combinate in una vasta gamma di soluzioni. Isole, penisole, elementi centrali e laterali con e senza braccioli su cui gettare grandi cuscini dai tessuti originali e colorati. Elementi decorativi
                  che esaltano le linee morbide di questi divani sfoderabili che possono mutare aspetto insieme alla nostra creatività.</p>
                <p> La spedizione é gratuita. </p>
              </div>
            </div>
          </div>
          <!-- ./ deal details -->

        </div>
        <!-- Group Details -->
        <div class="col-md-4">
          
          <div class="row">
            <!-- group activation progress -->
            <div class="col-md-12">       
              <i class="fa d-inline fa-md fa-users"></i> Attivazione
                <div class="progress" style="height: 20px; margin-bottom:20px;">  
                    <?php 
                          $group_activation_progress = 100;
                          if($group['group_subscribed_members']  < $group['group_first_goal_members']){
                            $group_activation_progress = round( $group['group_subscribed_members']  / $group['group_first_goal_members'] *100);
                          }

                          $progressbar_color = ($group_activation_progress < 100 ? 'warning' : 'success');
                          $progressbar_striped = ($group_activation_progress < 100 ? 'progress-bar-striped' : '');
                          $progressbar_activationstatus = ( $group_activation_progress < 100 ?  $group_activation_progress . '%' : 'Gruppo attivo');
                    ?> 
                  <div class="progress-bar {{$progressbar_striped}} bg-{{$progressbar_color}}" role="progressbar" style="width:{{ $group_activation_progress }}%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"> {{ $progressbar_activationstatus }}</div>
                </div>                         
            </div>  <!-- ./ col-12 -->

            <div class="col-md-12">
              <p>Prezzo di listino <span style="font-size: 1.2em;">{{ $group['deal_initialprice'] }}€</span></p>
            </div>  <!-- ./ col-12 --> 
          </div>  <!-- ./ group activation progress -->



          <div class="row text-left">
             <!-- Pricing -->
           <div class="col-md-12">
              <!-- pricing -->
              <div>
                  <table class="table">
                  <thead>
                    <tr class="bg-info">
                      <th scope="col"><i class="fas fa-users"></i> Adessioni</th>
                      <th scope="col">% Sconto</th>
                      <th scope="col">Prezzo EUR</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="bg-success">
                      <th scope="row">da 1 a 49</th>
                      <td>10%</td>
                      <td>8100€</td>
                    </tr>
                    <tr class="bg-success">
                      <th scope="row">da 50 a 99</th>
                      <td>25%</td>
                      <td>6750€</td>
                    </tr>
                    <tr class="bg-warning">
                      <th scope="row"> da 100 a 200</th>
                      <td>40%</td>
                      <td>5400€</td>
                    </tr>
                  </tbody>
                  </table>
              </div>
            </div> 

             <!-- Current price and discount --> 
             <div class="col-md-12">
              <p>Prezzo raggiunto <span class="text-success" style="font-size: 1.5em;">&nbsp; <strong> {{ $group['deal_finalprice'] }}€ </strong></span> (sconti <span style="font-size: 1.2em;">  {{ $group['deal_third_discount'] }}% </span>)   </p>
            </div>

              <!-- expiration date --> 
            <div class="col-md-12 py-2">
              <i class="far fa-lg fa-clock" style="font-size: 2.0em;"></i><span class="h5"> Scade il 30/03/2018</span>
            </div>
            <!-- ./ minimun threshold -->
            <!-- maximun threshold 
            <div class="col-md-12">
              <h5>Soglia max: <strong><span style="font-size:1.3em;">200</span> </strong><i class="fas fa-users"></i></h5>
            </div>
              ./ maximum threshold-->
          </div>

          <div class="row">
          <!-- quantity -->
            <div class="col-md-12">
              <div class="text-center">
              <h4>Quantità</h4>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <button class="btn quantity-left-minus btn btn-danger btn-number" type="button" data-type="minus" data-field=""><i class="fas fa-minus"></i></button>
                    </div>
                     <input class="form-control text-center text-md-center"  style="font-size:20px;" type="text"  id="quantity" placeholder="" value="1"> 
                    <div class="input-group-append">
                      <button class="btn quantity-right-plus btn btn-success btn-number" type="button" data-type="plus" data-field=""><i class="fas fa-plus"></i></button>
                    </div>
                  </div>          
              </div>
            </div>
          <!-- ./ quantity -->
          </div>
          <hr>
          <!-- call to action -->
          <div class="row">
            <div class="col-md-12">
              <div class="text-center py-1">
                <a href="#" class="btn btn-success box-shadow" style="width:80%; font-size:24px;"><i class="fas fa-shopping-cart" style="font-size:1,9em; color:gold"></i> Partecipa</a>
              </div>
              
              <div class="text-center py-1">
                <a class="btn btn-outline-secondary" style="width:80%; font-size:24px;" href="#"><i class="fas fa-heart" style="font-size:1,9em; color:red"></i> Wishlist</a>
              </div>
              <div class="text-center py-1">
                <a class="btn btn-outline-info" style="width:80%; font-size:24px;" href="#"><i class="fas fa-share" style="font-size:1,9em; color:gray"></i> Condividi</a>
              </div>         
              </br>
              </br>
            </div>
          </div>
          <!-- ./ col 6 -->
        </div>
        <div class="row px-2 py-3">
          <!-- left: about product -->
          <div class="col-md-8">
            <div class="row">

              <!-- Terms -->
              <div class="col-md-12">
                <h4>Condizioni</h4>
                <hr>
                <p> <small>
                  Il "Gruppo di Acquisto" è una modalità di acquisto che consente di ottenere ottimi prezzi, grazie all'elevato numero di acquirenti concentrati in un periodo di tempo limitato.
                  </small> </p>
                <p> <small>
                  Con i Gruppi di Acquisto di Buyersharing é necessario raggiungere la soglia minima di acquirenti per avere diritto a ricevere il prodotto. Se invece la soglia minima non viene raggiunta, il Gruppo di Acquisto potrebbe essere annullato.
                  Il Gruppo di Acquisto si chiude al raggiungimento della soglia massima di acquirenti o alla data di scandenza indicata in ogni deal.
                  Nessun addebito verrà effettuato in caso di annullamento del Gruppo di Acquisto.
                  </small> </p>
              </div>
              <!-- ./ terms -->
            </div>
          </div> <!-- ./ col 8-->
          <div class="col-md-4">
             <!-- loan simulator -->
             <div class="container border py-2 text-center">
              <h3>Proposta Finanziamento</h3>  
              <p><i class="fas fa-lg fa-check"></i> Selezionata per te <span class="h3 text-success"><strong>132,70€</strong></span> per <strong>96 mesi</strong></p> 
              <p><small>TAN FISSO 7,47% &nbsp; TAEG 7,73%</small></p>  
                <div class="text-center py-1">
                  <a class="btn btn-danger" href="#"> SCEGLI FINANZIAMENTO</a>
                </div>  
                <p><small>Confrontato con le migliore banche. Messaggio pubblicitario con finalità promozionale.</small></p>   
                <p><small><a href="#"><i class="fas fa-file-pdf"></i> Preventivo/Info Europee di base Credito ai Consumatori</a></small></p>           
              </div>
              <!-- ./ loan simulator -->
          </div> 

        </div>
      </div>
  
    </div>
  </div>
  
<!-- Call to action -->
<div>
  <!-- Call to action: create a group -->
@include('group-links')
</div>

@endsection

