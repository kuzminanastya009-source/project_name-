<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Просмотр изображения</title>
</head>
<body style="text-align: center; padding: 50px;">
    <h1>Просмотр изображения</h1>
    
    <!-- вывод картинки по имени, которое пришло из маршрута -->
    <img src="{{ asset('images/' . $image) }}" alt="Полное изображение" style="max-width: 100%; height: auto;">
    
    <br><br>
    <a href="{{ route('home') }}">Вернуться на главную</a>
</body>
</html>