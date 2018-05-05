<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/groups.css') }}" type="text/css">

<?php

$groups[] = array(
            'group_id' => '000000001',
            'group_number' => '000000001',
            'group_created_by_user_id' => 'Buyersharing',
            'group_created_by' => 'MyNickname',
            'group_created_on' => '2018-03-01',
            'group_expire_on' => '2018-05-01',
            'group_min_users' => '500',
            'group_max_users' => '2000',
            'deal_image_path' =>  'img/furniture',
            'deal_image_name' => '303-divaniquattroopiuposti-80284-b-1.jpg',
            'deal_title' => 'Divano Grace. Euromobil',
            'deal_description' => 'Forme di lusso, ricche decorazioni e contorni lisci', 
            'deal_initialprice' => '3250.00', 
            'deal_finalprice' => '2650.00',
            'deal_initialdiscount' => round(0.33 * 100,1),
            'deal_maxdiscount' => round(0.45*100,1),
            'group_activation_progress' => round(350/500*100), 
            'status' => 'OPEN',
            );
$groups[] = array(
            'group_id' => '000000002',
            'group_number' => '000000002',
            'group_created_user' => 'Buyersharing',
            'group_created_on' => '2018-03-01',
            'group_expire_on' => '2018-05-01',
            'deal_image_path' =>  'img/furniture',
            'deal_image_name' => '199-mobilipercucina-89487-b-1.jpg',
            'deal_title' => 'Progetto Lane. Euromobil',
            'deal_description' => 'Di gusto giovane e con un design rigoroso.', 
            'deal_initialprice' => '3490.00', 
            'deal_finalprice' => '2850.00',
            'deal_initialdiscount' => round(0.2 * 100,1),
            'deal_maxdiscount' => round(0.24*100,1),
            'group_activation_progress' => round(500/500*100), 
            'status' => 'OPEN',
          );
$groups[] = array(
            'group_id' => '000000003',
            'group_number' => '000000003',
            'group_created_user' => 'Buyersharing',
            'group_created_on' => '2018-03-01',
            'group_expire_on' => '2018-05-01',
            'deal_image_path' =>  'img/furniture',
            'deal_image_name' => '207-pianicottura-88876-b-1.jpg',
            'deal_title' => 'Progetto Cucina. Euromobil',
            'deal_description' => 'Design rigoroso.', 
            'deal_initialprice' => '14790.00', 
            'deal_finalprice' => '9850.00',
            'deal_initialdiscount' => round(0.33 * 100,1),
            'deal_maxdiscount' => round(0.39*100,1),
            'group_activation_progress' => round(3/10*100),
            'status' => 'OPEN',
          );
        // samoa-divani-classici-grace
        $groups[] = array(
          'group_id' => '000000003',
          'group_number' => '000000003',
          'group_created_user' => 'Buyersharing',
          'group_created_on' => '2018-03-01',
          'group_expire_on' => '2018-05-01',
          'deal_image_path' =>  'img/furniture',
          'deal_image_name' => 'samoa-divani-classici-grace.jpg',
          'deal_title' => 'Divani classici grace - Samoa',
          'deal_description' => 'Design rigoroso.', 
          'deal_initialprice' => '19790.00', 
          'deal_finalprice' => '1450.00',
          'deal_initialdiscount' => round(0.33 * 100,1),
          'deal_maxdiscount' => round(0.29*100,1),
          'group_activation_progress' => round(3/10*100),
          'status' => 'OPEN',
        );
?>

<!-- suggested link groups -->
<div class="py-2">
  <div class="container border py-2">
  <h3>Altri gruppi simili</h3>
    <div class="row mt-1">     
@foreach ($groups as $group)
         <?php $deal_image_fullname = $group["deal_image_path"] . DIRECTORY_SEPARATOR . $group["deal_image_name"] ; ?>
  <div class="col-md-3 mt-1">
    <a href="{{ url('/groups/divano-grace-euromobil') }}" style="display: block; text-decoration: none">
          <div class="card">
            <img class="card-img-top" style="width:100%; height:180px;" src='{{asset("$deal_image_fullname")}}' alt="deal image">
            <div class="card-img-overlay"> <span class="badge badge-pill badge-danger"> {{ $group['deal_maxdiscount'] }}% sconto</span> </div>
            <div class="card-body px-2 py-1">
              <h3 class="card-title card-text-deal-truncate h6 font-weight-bold" >{{ $group['deal_title'] }}</h3>
              <p class="card-text card-text-deal-truncate text-sm-left">{{ $group['deal_description'] }}</p>
                   <p><strike>€{{ $group['deal_initialprice'] }}</strike> <span class="text-success">&nbsp;<strong>€{{ $group['deal_finalprice'] }}</strong> </span> </p>
            </div> <!-- ./ card-body -->
          </div> <!-- ./card -->
        </div>
    </a>
@endforeach
</div> <!-- ./ row -->
     <!-- ./ abbonamenti -->
  </div> <!-- ./container -->
</div> <!-- -/py -->