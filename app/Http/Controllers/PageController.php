<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Главная
    public function home()
    {
        return view('home');
    }

    // О нас
    public function about()
    {
        return view('about');
    }

    // Контакты (динамические данные)
    public function contacts()
    {
        // Массив данных (в задании сказано "массив данных и отправить его методом view")
        $data = [
            'phone' => '+7 (999) 123-45-67',
            'email' => 'info@example.com',
            'address' => 'г. Москва, ул. Пушкина, д. 1'
        ];

        // Передаем массив в шаблон contacts.blade.php
        return view('contacts', $data);
    }
}