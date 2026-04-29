<?php

use Illuminate\Support\Facades\Route;


// frontend
Route::get('/',function(){
    return view('Frontend.pages.HomePage');
});
