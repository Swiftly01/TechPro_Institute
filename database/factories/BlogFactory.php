<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();

        return [
            'title' => $this->faker->sentence(),
            'slug' => Str::slug($title),
            'subtitle' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(3, true),
            'excerpt' => $this->faker->text(100),
            'category' => $this->faker->randomElement(['tech', 'business', 'design', 'education']),
            'blog_highlight' => json_encode($this->faker->sentences(3)),
            
        ];
    }
}
