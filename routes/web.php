<?php

use Illuminate\Support\Facades\Route;
use App\Models\State;

Route::get('/',function(){
    return View('frontend.home');
});

Route::get('/seo-services/{state?}',function($state = null){
    if(!$state){
    $data = State::all();
    return View('frontend.seo-services', compact('data'));
    }
   
 return view('frontend.seo-services-with-city',compact('state'));
})->name('seo-service');

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