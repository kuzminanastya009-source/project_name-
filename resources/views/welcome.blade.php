<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        img.preview { max-width: 100px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Список статей</h1>
    
    <table>
        <thead>
            <tr>
                <th>Дата</th>
                <th>Название</th>
                <th>Превью</th>
                <th>Краткое описание</th>
                <th>Действие</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article['date'] }}</td>
                    <td>{{ $article['name'] }}</td>
                    <td>
                        <!-- Ссылка на страницу с картинкой (превью) -->
                        <a href="{{ route('image.show', ['image' => $article['preview_image']]) }}">
                            <img src="{{ asset('images/' . $article['preview_image']) }}" alt="Превью" class="preview">
                        </a>
                    </td>
                    <td>{{ $article['shortDesc'] ?? '' }}</td>
                    <td>
                        <!-- Ссылка на страницу с полной картинкой -->
                        <a href="{{ route('image.show', ['image' => $article['full_image']]) }}">Смотреть полностью</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>