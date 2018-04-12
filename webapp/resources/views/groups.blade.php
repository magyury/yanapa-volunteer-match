<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/groups.css') }}" type="text/css">

<?php

$buyergroups[] = array(
            'buyergroup_id' => '000000001',
            'buyergroup_number' => '000000001',
            'buyergroup_created_by' => 'Buyersharing',
            'buyergroup_created_on' => '2018-03-01',
            'buyergroup_expire_on' => '2018-05-01',
            'deal_image_path' =>  'img/orders_sharings/',
            'deal_image_name' => '303-divaniquattroopiuposti-80284-b-1.jpg',
            'deal_title' => 'Divano Grace. Euromobil',
            'deal_description' => 'Forme di lusso, ricche decorazioni e contorni lisci', 
            'deal_initialprice' => '3250.00', 
            'deal_finalprice' => '2650.00',
            'deal_initialdiscount' => round(0.33 * 100,1),
            'deal_maxdiscount' => round(0.45*100,1),
            'deal_salestarget' => 1000,
            'orders' => 350,
            'salesprogress' => round(350/1000*100),
            'status' => 'OPEN',
            );
$buyergroups[] = array(
            'buyergroup_id' => '000000002',
            'buyergroup_number' => '000000002',
            'buyergroup_created_user' => 'Buyersharing',
            'buyergroup_created_on' => '2018-03-01',
            'buyergroup_expire_on' => '2018-05-01',
            'deal_image_path' =>  'img/orders_sharings/',
            'deal_image_name' => '199-mobilipercucina-89487-b-1.jpg',
            'deal_title' => 'Progetto Lane. Euromobil',
            'deal_description' => 'Di gusto giovane e con un design rigoroso.', 
            'deal_initialprice' => '3490.00', 
            'deal_finalprice' => '2850.00',
            'deal_initialdiscount' => round(0.2 * 100,1),
            'deal_maxdiscount' => round(0.24*100,1),
            'deal_salestarget' => 1000,
            'orders' => 650,     
            'salesprogress' => round(650/1000*100),
            'status' => 'OPEN',
          );
$buyergroups[] = array(
            'buyergroup_id' => '000000003',
            'buyergroup_number' => '000000003',
            'buyergroup_created_user' => 'Buyersharing',
            'buyergroup_created_on' => '2018-03-01',
            'buyergroup_expire_on' => '2018-05-01',
            'deal_image_path' =>  'img/orders_sharings/',
            'deal_image_name' => '207-pianicottura-88876-b-1.jpg',
            'deal_title' => 'Progetto Cucina. Euromobil',
            'deal_description' => 'Design rigoroso.', 
            'deal_initialprice' => '14790.00', 
            'deal_finalprice' => '9850.00',
            'deal_initialdiscount' => round(0.33 * 100,1),
            'deal_maxdiscount' => round(0.39*100,1),
            'deal_salestarget' => 10,
            'orders' => 3,     
            'salesprogress' => round(3/10*100),
            'status' => 'OPEN',
          );
$buyergroups[] = array(
            'buyergroup_id' => '000000004',
            'buyergroup_number' => '000000004',
            'buyergroup_created_user' => 'Buyersharing',
            'buyergroup_created_on' => '2018-03-01',
            'buyergroup_expire_on' => '2018-05-01',
            'deal_image_path' =>  'img/orders_sharings/',
            'deal_image_name' => 'virginactive.jpg',
            'deal_title' => 'Abbonamento Palestra. Virgin Active',
            'deal_description' => 'Abbonamento annuale open in tutta italia.', 
            'deal_initialprice' => '650.00', 
            'deal_finalprice' => '450.00',
            'deal_initialdiscount' => round(0.29 * 100,1),
            'deal_maxdiscount' => round(0.37*100,1),
            'deal_salestarget' => 1000,
            'orders' => 450,     
            'salesprogress' => round(450/1000*100),
            'status' => 'OPEN',
          );
$buyergroups[] = array(
            'buyergroup_id' => '000000005',
            'buyergroup_number' => '000000005',
            'buyergroup_created_user' => 'Buyersharing',
            'buyergroup_created_on' => '2018-03-01',
            'buyergroup_expire_on' => '2018-05-01',
            'deal_image_path' =>  'img/orders_sharings/',
            'deal_image_name' => 'getfit.gif',
            'deal_title' => 'Abbonamento Palestra. GetFit',
            'deal_description' => 'Abbonamento annuale open più lezione con personal trainer', 
            'deal_initialprice' => '450.00', 
            'deal_finalprice' => '380.00',
            'deal_initialdiscount' => round(0.35 * 100,1),
            'deal_maxdiscount' => round(0.56*100,1),
            'deal_salestarget' => 1000,
            'orders' => 750,     
            'salesprogress' => round(750/1000*100),
            'status' => 'OPEN',
          );
$buyergroups[] = array(
            'buyergroup_id' => '000000006',
            'buyergroup_number' => '000000006',
            'buyergroup_created_user' => 'Buyersharing',
            'buyergroup_created_on' => '2018-03-01',
            'buyergroup_expire_on' => '2018-05-01',
            'deal_image_path' =>  'img/orders_sharings/',
            'deal_image_name' => 'tonicme.jpg',
            'deal_title' => 'Abbonamento Palestra. Tonic',
            'deal_description' => 'Abbonamento annuale open Milano', 
            'deal_initialprice' => '360.00', 
            'deal_finalprice' => '290.00',
            'deal_initialdiscount' => round(0.22 * 100,1),
            'deal_maxdiscount' => round(0.29*100,1),
            'deal_salestarget' => 1000,
            'orders' => 600,     
            'salesprogress' => round(600/1000*100),
            'status' => 'OPEN',
          );
?>


<div class="py-3">
  <div class="container">
    <div class="row mt-1">     
@foreach ($buyergroups as $buyergroup)

  <div class="col-md-4 mt-1">
          <div class="card">
            <img class="card-img-top" style="width:auto; height:200px;" src="{{ $buyergroup['deal_image_path'] }}/{{ $buyergroup['deal_image_name'] }}" alt="deal image">
            <div class="card-img-overlay"> <span class="badge badge-pill badge-danger"> {{ $buyergroup['deal_maxdiscount'] }}% sconto</span> </div>
            <div class="card-body px-1">
              <h3 class="card-title card-text-deal-truncate"style="font-size:16px; font-weight:bolder">{{ $buyergroup['deal_title'] }}</h3>
              <p class="card-text card-text-deal-truncate" style="font-size:14px;">{{ $buyergroup['deal_description'] }}</p>
                  <div class="row"> <!-- progress bar -->           
                    <div class="col-4"> <!-- col price -->
                        <div class="text-right">
                          <!-- share -->
                          <a class="btn btn-outline-dark btn-sm" style="font-size:12px;width:80%;"  href="{{ url('/groups/msmsms') }}" role="button"><i class="fa d-inline fa-md fa-share"></i> Share!</a>
                        </div>
                    </div> <!-- ./col price -->
                    <div class="col-8"> <!-- col share -->
                        <div class="text-left">
                          <p><strike>€{{ $buyergroup['deal_initialprice'] }}</strike> <span class="text-success">&nbsp;<strong>€{{ $buyergroup['deal_finalprice'] }}</strong> </span> </p>
                        </div>
                    </div>

                    <div class="col-4">
                        <!-- buyers -->
                      <p  class="text-right"><small><i class="fa d-inline fa-md fa-users"></i> Buyers</small></p>
                    </div>
                    <div class="col-8"> 
                      <div class="progress" style="height: 20px; margin-bottom:20px;">  
                      <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width:{{ $buyergroup['salesprogress'] }}%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">{{ $buyergroup['salesprogress'] }}%</div>
                    </div>                    
                  </div> <!-- ./row progress bar-->
                </div>
              <a class="btn btn-outline-success btn-lg btn-block" style="position: relative;"   href="{{ url('/groups/divano-grace-euromobil') }}" role="button"><i class="fa fa-md fa-shopping-cart"></i> Partecipa al gruppo</a>
            </div> <!-- ./ card-body -->
            <div class="card-footer"> <small class="text-muted card-text-deal-truncate" style="font-size:10px;">Scade il 31 marzo. Creato da Buyersharing.</small> </div>
          </div> <!-- ./card -->
        </div>
@endforeach
</div> <!-- ./ row -->
     <!-- ./ abbonamenti -->
  </div> <!-- ./container -->
</div> <!-- -/py -->
