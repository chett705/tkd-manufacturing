<?php

use Illuminate\Support\Facades\Route;



// backend
Route::prefix('backend')->name('backend.')->group(function () {
    Route::get('/', function () {
        return view('backend.dashboard.index');
    })->name('dashboard');
});

// frontend
Route::get('/',function(){
    return view('Frontend.pages.HomePage');
})->name('home');
Route::get('/about-us',function(){
    return view('Frontend.pages.AboutUsPage');
})->name('about-us');
Route::get('/our-trading-products',function(){
    return view('Frontend.pages.ProductPage');
})->name('products');
Route::get('/export',function(){
    return view('Frontend.pages.Export');
})->name('export');
Route::get('/blog',function(){
    return view('Frontend.pages.Blogpaage');
})->name('blog');
