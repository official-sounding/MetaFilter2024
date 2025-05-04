<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Subsite;
use App\Models\User;

trait FactoryTrait
{
    public function getFakeTimestamp(): string
    {
        $timestamp = $this->faker->dateTimeBetween('-20 years')->format('Y-m-d H:i:s');

        return date('Y-m-d H:i:s', strtotime($timestamp));
    }

    public function getRandomCommentId(): int
    {
        return Comment::inRandomOrder()->value('id');
    }

    public function getRandomPostId(): int
    {
        return Post::inRandomOrder()->value('id');
    }

    public function getRandomSubsiteId(): int
    {
        return Subsite::inRandomOrder()->value('id');
    }

    public function getRandomUserId(): int
    {
        return User::inRandomOrder()->value('id');
    }
}
