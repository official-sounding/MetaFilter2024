<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Favorite;
use App\Models\Post;
use App\Models\User;

final class FavoriteFactory extends BaseFactory
{
    protected $model = Favorite::class;

    public function definition(): array
    {
        $timestamp = $this->getFakeTimestamp();

        $favoritableType = $this->getFavoritableType();

        $favoritableId = $this->getFavoritableId($favoritableType);

        return [
            'user_id' => (new User())->inRandomOrder()->first(),
            'favoritable_id' => $favoritableId,
            'favoritable_type' => $favoritableType,
            'created_at' => $timestamp,
            'published_at' => $timestamp,
            'updated_at' => null,
        ];
    }

    private function getFavoritableId(string $favoritableType): string
    {
        return match ($favoritableType) {
            'comment' => (new Comment())->inRandomOrder()->first()->pluck('id'),
            'post' => (new Post())->inRandomOrder()->first()->pluck('id'),
        };
    }

    private function getFavoritableType(): string
    {
        $random = mt_rand(0, 1);

        return $random === 1 ? 'comment' : 'post';
    }
}
