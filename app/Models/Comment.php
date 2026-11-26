<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // разрешение на заполнение полей
    protected $fillable = [
        'article_id',
        'author',
        'content',
    ];

    // комментарий принадлежит одной статье
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
