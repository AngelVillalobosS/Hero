<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\portfolioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[homeController::class,'homeView'])->name('home');
Route::get('portfolio',[portfolioController::class,'portfolioView'])->name('portfolio');