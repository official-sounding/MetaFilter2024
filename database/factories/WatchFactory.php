<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Watch;

final class WatchFactory extends BaseFactory
{
    protected $model = Watch::class;

    public function definition(): array
    {
        $timestamp = $this->getFakeTimestamp();
        $watchType = $this->getWatchableType();
        $watchId = $this->getWatchableId($watchType);

        return [
            'user_id' => (new User())->inRandomOrder()->first(),
            'watch_id' => $watchId,
            'watch_type' => $watchType,
            'created_at' => $timestamp,
            'published_at' => $timestamp,
            'updated_at' => null,
        ];
    }

    private function getWatchableId(string $watchType): string
    {
        return match ($watchType) {
            'comment' => (new Comment())->inRandomOrder()->first()->pluck('id'),
            'post' => (new Post())->inRandomOrder()->first()->pluck('id'),
        };
    }

    private function getWatchableType(): string
    {
        $random = mt_rand(0, 1);

        return $random === 1 ? 'comment' : 'post';
    }
}
