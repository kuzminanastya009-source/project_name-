<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
    <!-- подкл Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .article { border: 1px solid #ddd; padding: 15px; margin-bottom: 15px; }
        .article img { max-width: 150px; float: left; margin-right: 15px; }
        .clear { clear: both; }
    </style>
</head>
<body>
    <div class="container">
    <h1>Список новостей</h1>
<a href="{{ route('articles.create') }}" class="btn btn-success mb-3">Добавить статью</a>
    @foreach($articles as $article)
        <div class="article">
            <!-- превью картинки -->
            <img src="{{ asset('images/' . $article->preview_image) }}" alt="Превью">
            
            <h3>{{ $article->name }}</h3>
            <p><small>{{ $article->date }}</small></p>
            <p>{{ $article->shortDesc }}</p>
            
            <!-- ссылка на полный текст (пока просто заглушка или можно сделать страницу) -->
            <a href="#" class="btn btn-sm btn-primary">Читать полностью</a>
             <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-warning">Редактировать</a>
                
                <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить?')">Удалить</button>
                </form>
            <div class="clear"></div>
        </div>
    @endforeach
    {{-- пагинация --}}
<div class="mt-4 d-flex justify-content-center">
            {{ $articles->links('pagination::bootstrap-4') }}
        </div>
</div>
</body>
</html>