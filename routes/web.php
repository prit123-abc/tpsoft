<?php

use Illuminate\Support\Facades\Route;
use App\Models\State;
use App\Models\Page;
use App\Models\Service;

Route::get('/',function(){
    return View('frontend.home');
});

Route::get('/seo-services/{state?}',function($state = null){
    if(!$state){
    $data = State::all();
    return View('frontend.seo-services', compact('data'));
    }

$serviceId = Service::where('service', 'seo services')->value('id');
$stateId = State::where('state', $state)->value('id');
$pages = Page::with('state', 'service')
    ->where('state_id', $stateId)
    ->where('service_id', $serviceId)
    ->get();

return view('frontend.seo-services-with-city', compact('state', 'pages'));
})->name('seo-service');

Route::get('{service}/{state}/{location}',function($service,$state,$location){


$serviceId = Service::where('service', 'seo services')->value('id');
$stateId = State::where('state', $state)->value('id');
$pages = Page::with('state', 'service')
->where('state_id', $stateId)
    ->where('service_id', $serviceId)
    ->get();
    
   return view('frontend.innerpage.location',[  'state' => $state,
    'location' => $location,
    'pages' => $pages]);

});









Route::get('/website-development',function(){
        $data = State::all();
    return View('frontend.website-development',compact('data'));
})->name('website-development');

Route::get('/digital-marketing',function(){
      $data = State::all();
    return View('frontend.digital-marketing',compact('data'));
})->name('digital-marketing');

Route::get('/software-development',function(){
      $data = State::all();
    return View('frontend.software-development',compact('data'));
})->name('software-development');