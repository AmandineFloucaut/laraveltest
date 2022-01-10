<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // For create datafixtures with tinker :
        // Comment::factory()->count(3)->create();
        return [
            'content' => $this->faker->sentence,
            'post_id' => 2,
            'created_at' => now(),
        ];
    }
}
