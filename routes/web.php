<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Показ формы регистрации (GET)
Route::get('/signin', [AuthController::class, 'create'])->name('signin');

// Обработка формы (POST)
Route::post('/signin', [AuthController::class, 'registration'])->name('signin.post');