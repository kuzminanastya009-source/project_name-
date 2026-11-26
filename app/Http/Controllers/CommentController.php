<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // список комментариев
    public function index()
    {
        $comments = Comment::with('article')->paginate(10);
        return view('comments.index', compact('comments'));
    }

    // форма создания комментария (привязываем к статье)
    public function create(Request $request)
    {
        $articleId = $request->query('article_id');
        return view('comments.create', compact('articleId'));
    }

    // сохранение
    public function store(Request $request)
    {
        $validated = $request->validate([
            'article_id' => 'required|exists:articles,id',
            'author' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Comment::create($validated);
        return redirect()->route('articles.index')->with('success', 'Комментарий добавлен!');
    }

    // форма редактирования
    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    // обновление
    public function update(Request $request, Comment $comment)
    {
        $validated = $request->validate([
            'author' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $comment->update($validated);
        return redirect()->route('articles.index')->with('success', 'Комментарий обновлен!');
    }

    // удаление
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success', 'Комментарий удален!');
    }
}