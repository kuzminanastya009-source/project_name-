<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //привязка к случайной сущ статье
            'article_id' => \App\Models\Article::inRandomOrder()->first()->id ?? \App\Models\Article::factory(),
        'author' => $this->faker->name(),
        'content' => $this->faker->paragraph(2),
        ];
    }
}
