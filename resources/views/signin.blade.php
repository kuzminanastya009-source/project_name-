<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 50px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 300px; padding: 8px; }
        button { padding: 10px 20px; background: #007bff; color: white; border: none; cursor: pointer; }
        .error { color: red; font-size: 14px; margin-top: 5px; }
    </style>
</head>
<body>
    <h1>Регистрация пользователя</h1>

    <!-- форма отправляется на маршрут /signin методом POST -->
    <form action="{{ route('signin.post') }}" method="POST">
        @csrf <!-- обяз CSRF-токен для защиты от подделки запросов -->

        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" name="password" id="password" required>
            @error('password') <div class="error">{{ $message }}</div> @enderror
        </div>

        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>