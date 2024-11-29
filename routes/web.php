<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/promo', function () {
    return view('promo');
});

Route::resource('promo', PromoController::class);
