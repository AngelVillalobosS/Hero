<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\viewsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio',[homeController::class,'homeView'])->name('home');
Route::get('/galeria-trabajos',[portfolioController::class,'portfolioView'])->name('portfolio');
Route::get('/marcas', [viewsController::class, 'brandsView'])->name('brandsView');
Route::get('/agendar-cita', [viewsController::class, 'formularieView'])->name('formularioView');