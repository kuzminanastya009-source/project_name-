<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    //разрешение на заполнение полей
    protected $fillable = [
        'date',
        'name',
        'preview_image',
        'full_image',
        'shortDesc',
        'desc',
    ];

    // у статьи может быть много комментариев
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
