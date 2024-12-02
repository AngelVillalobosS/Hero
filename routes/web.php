<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\viewsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[homeController::class,'homeView'])->name('home');
Route::get('portfolio',[portfolioController::class,'portfolioView'])->name('portfolio');
Route::get('/marcas', [viewsController::class, 'brandsView'])->name('brandsView');