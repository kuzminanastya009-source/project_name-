<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Метод для главной страницы (вывод списка)
    public function index()
    {
        // Читаем JSON-файл из папки public
        $json = file_get_contents(public_path('articles.json'));
        $articles = json_decode($json, true);

        // Передаем данные в шаблон welcome.blade.php
        return view('welcome', compact('articles'));
    }

    // Метод для страницы просмотра полной картинки
    public function showImage($image)
    {
        // Просто передаем имя картинки в шаблон
        return view('image', ['image' => $image]);
    }
}