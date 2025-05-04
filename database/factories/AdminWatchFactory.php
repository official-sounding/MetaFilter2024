<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\AdminWatch;
use App\Traits\FactoryTrait;

final class AdminWatchFactory extends BaseFactory
{
    use FactoryTrait;

    protected $model = AdminWatch::class;

    public function definition(): array
    {
        $timestamp = $this->getFakeTimestamp();
        $watchType = $this->getWatchableType();
        $watchId = $this->getWatchableId($watchType);

        return [
            'user_id' => $this->getRandomUserId(),
            'watch_id' => $watchId,
            'watch_type' => $watchType,
            'created_at' => $timestamp,
            'published_at' => $timestamp,
            'updated_at' => null,
        ];
    }

    private function getWatchableId(string $watchType): int
    {
        return match ($watchType) {
            'comment' => $this->getRandomCommentId(),
            'post' => $this->getRandomPostId(),
        };
    }

    private function getWatchableType(): string
    {
        $random = mt_rand(0, 1);

        return $random === 1 ? 'comment' : 'post';
    }
}
