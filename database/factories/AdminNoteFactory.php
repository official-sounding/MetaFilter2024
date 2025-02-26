<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Comment;
use App\Models\AdminNote;
use App\Models\Post;
use App\Models\User;

final class AdminNoteFactory extends BaseFactory
{
    protected $model = AdminNote::class;

    public function definition(): array
    {
        $timestamp = $this->getFakeTimestamp();

        $notableType = $this->getNotableType();

        $notableId = $this->getNotableId($notableType);

        return [
            'text' => $this->faker->paragraph(),
            // TODO: Search for a mod
            'moderator_id' => (new User())->inRandomOrder()->first(),
            'notable_id' => $notableId,
            'notable_type' => $notableType,
            'created_at' => $timestamp,
            'published_at' => $timestamp,
            'updated_at' => null,
        ];
    }

    private function getNotableId(string $notableType): string
    {
        return match ($notableType) {
            'comment' => (new Comment())->inRandomOrder()->first()->pluck('id'),
            'post' => (new Post())->inRandomOrder()->first()->pluck('id'),
        };
    }

    private function getNotableType(): string
    {
        $random = mt_rand(0, 1);

        return $random === 1 ? 'comment' : 'post';
    }
}
