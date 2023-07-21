<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thread>
 */
class ThreadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'     => rand(1, 10),
            // 'category_id' => rand(1, 10),
            'title'       => $this->faker->sentence(),
            'body'        => $this->faker->paragraph(),
        ];
    }
}
