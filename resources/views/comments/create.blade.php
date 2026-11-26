<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавить комментарий</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="padding: 20px;">
    <div class="container">
        <h1>Добавить комментарий</h1>
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <input type="hidden" name="article_id" value="{{ $articleId }}">
            <div class="mb-3">
                <label>Автор:</label>
                <input type="text" name="author" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Комментарий:</label>
                <textarea name="content" rows="5" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Отмена</a>
        </form>
    </div>
</body>
</html>