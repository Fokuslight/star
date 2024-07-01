<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Profile;
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
        return [
            'title' => fake()->name,
            'published_at' => fake()->date,
            'content' => fake()->text,
            'profile_id' => Profile::first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'view' => random_int(100, 300),
            'is_commentable' => fake()->boolean,
        ];
    }
}
