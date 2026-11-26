@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
    <h1>Контакты</h1>
    <p>Наши контактные данные:</p>
    <ul>
        <li><strong>Телефон:</strong> {{ $phone }}</li>
        <li><strong>Email:</strong> {{ $email }}</li>
        <li><strong>Адрес:</strong> {{ $address }}</li>
    </ul>
@endsection