<?php

use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo/{name?}', function ($name=null) {
    return "Welcome to the Community $name!";
});

Route::get('/groups', function () {
    return view('welcome');
});

Route::get('/groups/{group_name?}', function ($group_name) {

// search group by name and show it


$groups[] = array(
    'group_id' => '000000001',
    'group_number' => '000000001',
    'group_year' => '2018',
    'group_name' => 'scooter-125',
    'group_created_by_user' => 'Mateo M',
    'group_created_on' => '2018-03-01',
    'group_expire_on' => '20-05-2018',
    'group_first_goal_members' => 50,
    'group_second_goal_members' => 100,
    'group_third_goal_members' => 200,
    'group_subscribed_members' => 60,
    'group_max_subscribed_members' => 200,
    'deal_image_path' =>  'img/moto',
    'deal_image_name' => 'vespa-primavera-laterale-dx.jpg',
    'deal_title' => 'Scooter 125',
    'deal_description' => 'Un\'icona di stile ad alta tecnologia', 
    'deal_initialprice' => '4.320,00', 
    'deal_finalprice' => '3.024,00',
    'deal_first_discount' => round(0.20 * 100,1),
    'deal_second_discount' => round(0.25 * 100,1),
    'deal_third_discount' => round(0.30 * 100,1),
    'group_activation_progress' => round(500/500*100), 
    'status' => 'OPEN',
    );
  $groups[] = array(
    'group_id' => '000000002',
    'group_number' => '000000002',
    'group_year' => '2018',
    'group_name' => 'energy-fitness',
    'group_created_by_user' => 'Paola S',
    'group_created_on' => '2018-03-01',
    'group_expire_on' => '15-05-2018',
    'group_first_goal_members' => 300,
    'group_second_goal_members' => 500,
    'group_third_goal_members' => 1000,
    'group_subscribed_members' => 320,
    'group_max_subscribed_members' => 1000,
    'deal_image_path' =>  'img/fitness',
    'deal_image_name' => 'energy-fitness.jpg',
    'deal_title' => 'Energy fitness',
    'deal_description' => 'Abbonamento open 12 mesi', 
    'deal_initialprice' => '1.000,00', 
    'deal_finalprice' => '600,00',
    'deal_first_discount' => round(0.2 * 100,1),
    'deal_second_discount' => round(0.30 * 100,1),
    'deal_third_discount' => round(0.40 * 100,1),
    'group_activation_progress' => round(100/500*100), 
    'status' => 'OPEN',
  );
  $groups[] = array(
    'group_id' => '000000003',
    'group_number' => '000000003',
    'group_year' => '2018',
    'group_name' => 'sedia-design-k',
    'group_created_by_user' => 'Buyersharing',
    'group_created_on' => '2018-03-01',
    'group_expire_on' => '30-05-2018',
    'group_first_goal_members' => 50,
    'group_second_goal_members' => 100,
    'group_third_goal_members' => 200,
    'group_subscribed_members' => 40,
    'group_max_subscribed_members' => 400,
    'deal_image_path' =>  'img/furniture',
    'deal_image_name' => 'sedia-design-k.jpg',
    'deal_title' => 'Sedia design K',
    'deal_description' => 'Confortevole poltroncina in policarbonato trasparente', 
    'deal_initialprice' => '270,00', 
    'deal_finalprice' => '175,00',
    'deal_initialdiscount' => round(0.23 * 100,1),
    'deal_additionaldiscount' => round(0.28 * 100,1),
    'deal_third_discount' => round(0.35 * 100,1),
    'group_activation_progress' => round(100/100*100),
    'status' => 'OPEN',
  );
  $groups[] = array(
    'group_id' => '000000004',
    'group_number' => '000000004',
    'group_year' => '2018',
    'group_name' => 'e-bike',
    'group_created_by_user' => 'Mariagrazia C',
    'group_created_on' => '2018-03-01',
    'group_expire_on' => '30-05-2018',
    'group_first_goal_members' => 150,
    'group_second_goal_members' => 400,
    'group_third_goal_members' => 800,
    'group_subscribed_members' => 480,
    'group_max_subscribed_members' => 800,
    'deal_image_path' =>  'img/bike',
    'deal_image_name' => 'e-bike.jpg',
    'deal_title' => 'e-MTB',
    'deal_description' => 'la e-MTB di generazione 2.0', 
    'deal_initialprice' => '6.999,00', 
    'deal_finalprice' => '4.550,00',
    'deal_initialdiscount' => round(0.24 * 100,1),
    'deal_additionaldiscount' => round(0.33 * 100,1),
    'deal_third_discount' => round(0.35 * 100,1),  
    'group_activation_progress' => round(400/1000*100),
    'status' => 'OPEN',
  );
  $groups[] = array(
    'group_id' => '000000005',
    'group_number' => '000000005',
    'group_year' => '2018',
    'group_name' => 'passeggino-trilogy',
    'group_created_by_user' => 'Federica A',
    'group_created_on' => '2018-03-01',
    'group_expire_on' => '15-06-2018',
    'group_first_goal_members' => 500,
    'group_second_goal_members' => 1000,
    'group_third_goal_members' => 2000,
    'group_subscribed_members' => 220,
    'group_max_subscribed_members' => 4000,
    'deal_image_path' =>  'img/bambini',
    'deal_image_name' => 'passeggino-trilogy.jpg',
    'deal_title' => 'Passeggino Trilogy',
    'deal_description' => 'Il massimo comfort, il meglio della praticità', 
    'deal_initialprice' => '769,00', 
    'deal_finalprice' => '538,00',
    'deal_initialdiscount' => round(0.10 * 100,1),
    'deal_additionaldiscount' => round(0.15 * 100,1),
    'deal_third_discount' => round(0.30 * 100,1),
    'group_activation_progress' => round(1000/1000*100),
    'status' => 'OPEN',
  );
  $groups[] = array(
    'group_id' => '000000006',
    'group_number' => '000000006',
    'group_year' => '2018',
    'group_name' => 'penna-roller-legrand',
    'group_created_by_user' => 'Giulia R',
    'group_created_on' => '2018-03-01',
    'group_expire_on' => '30-06-2018',
    'group_first_goal_members' => 200,
    'group_second_goal_members' => 500,
    'group_third_goal_members' => 1000,
    'group_subscribed_members' => 220,
    'group_max_subscribed_members' => 3000,
    'deal_image_path' =>  'img/cancelleria',
    'deal_image_name' => 'penna-roller-legrand.jpg',
    'deal_title' => 'penna Roller LeGrand',
    'deal_description' => 'In pregiata resina nera con finiture in oro', 
    'deal_initialprice' => '460,00', 
    'deal_finalprice' => '322,00',
    'deal_initialdiscount' => round(0.22 * 100,1),
    'deal_third_discount' => round(0.30 * 100,1),
    'group_activation_progress' => round(1000/1000*100),
    'status' => 'OPEN',
  );
  

$groupModel = array();           
foreach ($groups as $group){
    if ($group_name == $group['group_name']){
        $groupModel = $group;
        break;
    }
 }

    return view('group', ['group' => $groupModel]);
});

Route::get('/confirm', function () {
    if(Auth::guest())
    {
        return redirect('/login');
    }
    return view('confirmation');
});

Route::get('/new', function () {
    return view('new-group');
});

Route::get('/create', function () {
    return view('create-group');
});

Route::get('/cookiepolicy', function () {
    return view('cookiepolicy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
