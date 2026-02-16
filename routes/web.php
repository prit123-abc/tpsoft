<?php

use Illuminate\Support\Facades\Route;
use App\Models\State;
use App\Models\Page;
use App\Models\Service;

Route::get('/',function(){
    return View('frontend.home');
});

// seo page state wise
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



// seo inner page
Route::get('{service}/{state}/{location}',function($service,$state,$location){


$serviceId = Service::where('service', 'seo services')->value('id');
$stateId = State::where('state', $state)->value('id');
$pages = Page::with('state', 'service')
->where('state_id', $stateId)
    ->where('service_id', $serviceId)
    ->get();
$page = Page::with('state','service')
->where('state_id',$stateId)
->where('service_id',$serviceId)
->where('location_slug',$location)
->first();
    
   return view('frontend.innerpage.seo-location',[  'state' => $state,
    'location' => $location,
    'pages' => $pages,
    'page' => $page]);

});

// city page
Route::get('/website-development/{state?}',function($state = null){
    if(!$state){
    $data = State::all();
    return View('frontend.website-development', compact('data'));
    }

$serviceId = Service::where('service', 'website development')->value('id');
$stateId = State::where('state', $state)->value('id');
$pages = Page::with('state', 'service')
    ->where('state_id', $stateId)
    ->where('service_id', $serviceId)
    ->get();

return view('frontend.web-development-with-city', compact('state', 'pages'));
})->name('website-service');

// website inner page
Route::get('{service}/{state}/{location}',function($service,$state,$location){


$serviceId = Service::where('service', 'website development')->value('id');
$stateId = State::where('state', $state)->value('id');
$pages = Page::with('state', 'service')
->where('state_id', $stateId)
    ->where('service_id', $serviceId)
    ->get();
$page = Page::with('state','service')
->where('state_id',$stateId)
->where('service_id',$serviceId)
->where('location_slug',$location)
->first();
    
   return view('frontend.innerpage.web-location',[  'state' => $state,
    'location' => $location,
    'pages' => $pages,
    'page' => $page]);

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