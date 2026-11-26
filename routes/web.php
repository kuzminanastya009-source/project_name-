<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

//лаба 1 
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

//лаба 2 (гл)
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/image/{image}', [MainController::class, 'showImage'])->name('image.show');

//лаба 3 (рег)
Route::get('/signin', [AuthController::class, 'create'])->name('signin');
Route::post('/signin', [AuthController::class, 'registration'])->name('signin.post');

//лаба 4-5
Route::resource('articles', ArticleController::class);

//лаб 6 (коммы)
Route::resource('comments', CommentController::class)->except(['show']);