<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // список новостей (с пагинацией)
    public function index()
    {
        $articles = Article::paginate(5);
        return view('articles', compact('articles'));
    }

    // форма создания
    public function create()
    {
        return view('articles_create');
    }

    // сохранение новой статьи
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|string|max:20',
            'preview_image' => 'required|string|max:255',
            'full_image' => 'required|string|max:255',
            'shortDesc' => 'nullable|string|max:500',
            'desc' => 'required|string',
        ]);

        Article::create($validated);
        return redirect()->route('articles.index')->with('success', 'Статья добавлена!');
    }

    // форма редактирования
    public function edit(Article $article)
    {
        return view('articles_edit', compact('article'));
    }

    // обновление статьи
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|string|max:20',
            'preview_image' => 'required|string|max:255',
            'full_image' => 'required|string|max:255',
            'shortDesc' => 'nullable|string|max:500',
            'desc' => 'required|string',
        ]);

        $article->update($validated);
        return redirect()->route('articles.index')->with('success', 'Статья обновлена!');
    }

    // удаление статьи
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Статья удалена!');
    }
}