<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; }
        header { background: #333; color: #fff; padding: 15px; }
        nav a { color: #fff; margin-right: 15px; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        main { padding: 20px; background: #fff; min-height: 400px; }
        footer { background: #333; color: #fff; text-align: center; padding: 10px; margin-top: 20px; }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Главная</a>
            <a href="{{ route('about') }}">О нас</a>
            <a href="{{ route('contacts') }}">Контакты</a>
        </nav>
    </header>

    <main>
        @yield('content')  <!-- Здесь будет меняться контент страниц -->
    </main>

    <footer>
        <!-- Укажите здесь свои ФИО и группу -->
        <p>Кузьмина Анастасия, группа 251-321</p>
    </footer>
</body>
</html>