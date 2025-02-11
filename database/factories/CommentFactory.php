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
        $timestamp = $this->faker->dateTimeBetween('-20 years')->format('Y-m-d H:i:s');
        $timestamp = date('Y-m-d H:i:s', strtotime($timestamp));

        return [
            'text' => $this->faker->paragraph(),
            'parent_id' => null,
            'post_id' => (new Post())->inRandomOrder()->first(),
            'user_id' => (new User())->inRandomOrder()->first(),
            'created_at' => $timestamp,
            'updated_at' => null,
            'deleted_at' => null,
        ];
    }
}
