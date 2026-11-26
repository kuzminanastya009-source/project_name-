<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Главная страница
Route::get('/', [PageController::class, 'home'])->name('home');

// Страница "О нас"
Route::get('/about', [PageController::class, 'about'])->name('about');

// Страница "Контакты" (передаем данные в метод view)
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');