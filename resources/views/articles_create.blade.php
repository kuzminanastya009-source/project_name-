<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создать статью</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="padding: 20px;">
    <div class="container">
        <h1>Создать статью</h1>
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Название:</label>
                <input type="text" name="name" class="form-control" required>
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label>Дата:</label>
                <input type="text" name="date" class="form-control" placeholder="01.01.2024" required>
            </div>
            <div class="mb-3">
                <label>Превью (имя файла):</label>
                <input type="text" name="preview_image" class="form-control" value="preview.jpg" required>
            </div>
            <div class="mb-3">
                <label>Полное фото (имя файла):</label>
                <input type="text" name="full_image" class="form-control" value="full.jpeg" required>
            </div>
            <div class="mb-3">
                <label>Краткое описание:</label>
                <textarea name="shortDesc" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label>Полное описание:</label>
                <textarea name="desc" rows="5" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Отмена</a>
        </form>
    </div>
</body>
</html>