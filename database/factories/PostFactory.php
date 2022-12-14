<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            'title' => $title = $this->faker->sentence(2),
            'slug' => Str::slug($title),
            'body' => $this->faker->text(1000),
            'user_id'=>$this->faker->numberBetween(1,5)
        ];
    }
}
