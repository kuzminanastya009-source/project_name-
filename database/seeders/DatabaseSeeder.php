<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // Создаем 10 фейковых статей
    \App\Models\Article::factory(10)->create();
    // создаем 30 комментариев
\App\Models\Comment::factory(30)->create();
}
}
