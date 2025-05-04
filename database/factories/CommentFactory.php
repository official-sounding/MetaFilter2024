<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Comment;
use App\Traits\FactoryTrait;

final class CommentFactory extends BaseFactory
{
    use FactoryTrait;

    protected $model = Comment::class;

    public function definition(): array
    {
        $random = rand(1, 4);

        return [
            'body' => $this->faker->paragraph(),
            'parent_id' => $random === 1 ? $this->getRandomCommentId() : null,
            'post_id' => $this->getRandomPostId(),
            'user_id' => $this->getRandomUserId(),
            'created_at' => $this->getFakeTimestamp(),
            'updated_at' => null,
            'deleted_at' => null,
        ];
    }
}
