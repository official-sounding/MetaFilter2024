<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

final class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'body' => $this->faker->paragraph(),
            'post_id' => Post::inRandomOrder()->first(),
            'user_id' => User::inRandomOrder()->first(),
            'created_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
