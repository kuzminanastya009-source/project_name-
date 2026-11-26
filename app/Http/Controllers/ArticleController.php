<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    // список новостей
    public function index()
    {
        $articles = Article::all();
        return view('articles', compact('articles'));
    }
}