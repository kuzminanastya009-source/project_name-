<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактировать статью</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="padding: 20px;">
    <div class="container">
        <h1>Редактировать статью</h1>
        <form action="{{ route('articles.update', $article) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Название:</label>
                <input type="text" name="name" class="form-control" value="{{ $article->name }}" required>
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label>Дата:</label>
                <input type="text" name="date" class="form-control" value="{{ $article->date }}" required>
            </div>
            <div class="mb-3">
                <label>Превью (имя файла):</label>
                <input type="text" name="preview_image" class="form-control" value="{{ $article->preview_image }}" required>
            </div>
            <div class="mb-3">
                <label>Полное фото (имя файла):</label>
                <input type="text" name="full_image" class="form-control" value="{{ $article->full_image }}" required>
            </div>
            <div class="mb-3">
                <label>Краткое описание:</label>
                <textarea name="shortDesc" class="form-control">{{ $article->shortDesc }}</textarea>
            </div>
            <div class="mb-3">
                <label>Полное описание:</label>
                <textarea name="desc" rows="5" class="form-control" required>{{ $article->desc }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Отмена</a>
        </form>
    </div>
</body>
</html>