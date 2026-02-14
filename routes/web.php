<?php

use Illuminate\Support\Facades\Route;
use App\Models\State;

Route::get('/',function(){
    return View('frontend.home');
});

Route::get('/seo-service',function(){
    $data = State::all();
    return View('frontend.seo-services', compact('data'));
})->name('seo-service');

Route::get('/website-development',function(){
    return View('frontend.website-development');
})->name('website-development');

Route::get('/digital-marketing',function(){
    return View('frontend.digital-marketing');
})->name('digital-marketing');

Route::get('/software-development',function(){
    return View('frontend.software-development');
})->name('software-development');