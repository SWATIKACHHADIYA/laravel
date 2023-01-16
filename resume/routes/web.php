<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\serviceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('skill', function () {
    return view('skill');
})->name('skill');

Route::get('service',[serviceController::class,'show'])->name('service');
Route::get('contact',[contactController::class,'show'])->name('contact');
