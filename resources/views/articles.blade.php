<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .article { border: 1px solid #ddd; padding: 15px; margin-bottom: 15px; }
        .article img { max-width: 150px; float: left; margin-right: 15px; }
        .clear { clear: both; }
    </style>
</head>
<body>
    <h1>Список новостей</h1>

    @foreach($articles as $article)
        <div class="article">
            <!-- превью картинки -->
            <img src="{{ asset('images/' . $article->preview_image) }}" alt="Превью">
            
            <h3>{{ $article->name }}</h3>
            <p><small>{{ $article->date }}</small></p>
            <p>{{ $article->shortDesc }}</p>
            
            <!-- ссылка на полный текст (пока просто заглушка или можно сделать страницу) -->
            <a href="#">Читать полностью</a>
            <div class="clear"></div>
        </div>
    @endforeach
</body>
</html>