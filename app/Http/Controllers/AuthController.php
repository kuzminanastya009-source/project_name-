<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // метод для отображения страницы с формой (GET /signin)
    public function create()
    {
        return view('signin');
    }

    // метод для обработки формы (POST /signin)
    public function registration(Request $request)
    {
        // 1 валид входных данных
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        // 2 сбор данных для ответа 
        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']), // хешир пароля 
            'message' => 'Пользователь успешно зарегистрирован!'
        ];

        // 3 возврат JSON-ответ
        return response()->json($data, 200);
    }
}