<?php

namespace Database\Factories;

use App\Models\Post;
use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 30),
            'title' => $this->faker->unique()->sentence,
            'details' => $this->faker->paragraph,
            'create_at' => now(),
            'update_at' => now()
        ];
    }
}
