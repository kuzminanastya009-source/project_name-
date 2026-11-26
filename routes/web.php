<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// гл стр
Route::get('/', [MainController::class, 'index'])->name('home');

// стр просмотра  (динамический маршрут)
Route::get('/image/{image}', [MainController::class, 'showImage'])->name('image.show');