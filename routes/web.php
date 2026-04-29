<?php

use Illuminate\Support\Facades\Route;

Route::prefix('backend')->name('backend.')->group(function () {
    Route::get('/', function () {
        return view('backend.dashboard.index');
    })->name('dashboard');
});
// bakend

// frontend
Route::get('/', function () {
    return view('welcome');
});
