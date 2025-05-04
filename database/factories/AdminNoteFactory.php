<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\AdminNote;
use App\Traits\FactoryTrait;

final class AdminNoteFactory extends BaseFactory
{
    use FactoryTrait;

    protected $model = AdminNote::class;

    public function definition(): array
    {
        $timestamp = $this->getFakeTimestamp();
        $notableType = $this->getNotableType();
        $notableId = $this->getNotableId($notableType);

        return [
            'text' => $this->faker->paragraph(),
            // TODO: Search for a mod
            'admin_id' => $this->getRandomUserId(),
            'notable_id' => $notableId,
            'notable_type' => $notableType,
            'created_at' => $timestamp,
            'published_at' => $timestamp,
            'updated_at' => null,
        ];
    }

    private function getNotableId(string $notableType): int
    {
        return match ($notableType) {
            'comment' => $this->getRandomCommentId(),
            'post' => $this->getRandomPostId(),
        };
    }

    private function getNotableType(): string
    {
        $random = mt_rand(0, 1);

        return $random === 1 ? 'comment' : 'post';
    }
}
