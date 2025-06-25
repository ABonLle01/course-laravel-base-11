<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $name = $this->faker->name();

        return [
            'title' => $name,
            'slug' => str()->slug($name),
            'content' => $this->faker->paragraph(20),
            'description' => $this->faker->paragraph(4),
            'posted' => $this->faker->boolean() ? 'yes' : 'not',
            'category_id' => $this->faker->randomElement(Category::pluck('id')->toArray()),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
