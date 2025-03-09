<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

final class CommentFactory extends BaseFactory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        $timestamp = $this->getFakeTimestamp();

        return [
            'text' => $this->faker->paragraph(),
            'parent_id' => null,
            'post_id' => Post::inRandomOrder()->first()?->id,
            'user_id' => User::inRandomOrder()->first()?->id,
            'created_at' => $timestamp,
            'updated_at' => null,
            'deleted_at' => null,
        ];
    }
}
