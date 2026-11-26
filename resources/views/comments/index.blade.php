<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Все комментарии</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="padding: 20px;">
    <div class="container">
        <h1>Все комментарии</h1>
        @foreach($comments as $comment)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $comment->author }}</h5>
                    <p class="card-text">{{ $comment->content }}</p>
                    <p class="text-muted">Статья: {{ $comment->article->name ?? '—' }}</p>
                    <a href="{{ route('comments.edit', $comment) }}" class="btn btn-sm btn-warning">Редактировать</a>
                    <form action="{{ route('comments.destroy', $comment) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить?')">Удалить</button>
                    </form>
                </div>
            </div>
        @endforeach
        <div class="mt-4 d-flex justify-content-center">
            {{ $comments->links('pagination::bootstrap-4') }}
        </div>
    </div>
</body>
</html>