<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   public function definition(): array
{
    return [
        'date' => $this->faker->date('d.m.Y'),
        'name' => $this->faker->sentence(3),
        'preview_image' => 'preview.jpg', 
        'full_image' => 'full.jpeg',
        'shortDesc' => $this->faker->text(50),
        'desc' => $this->faker->paragraph(5),
    ];
}
}
