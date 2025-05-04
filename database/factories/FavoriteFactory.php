<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Traits\FactoryTrait;
use Maize\Markable\Models\Favorite;

final class FavoriteFactory extends BaseFactory
{
    use FactoryTrait;

    protected $model = Favorite::class;

    public function definition(): array
    {
        $timestamp = $this->getFakeTimestamp();
        $favoritableType = $this->getFavoritableType();
        $favoritableId = $this->getFavoritableId($favoritableType);

        return [
            'user_id' => $this->getRandomUserId(),
            'favoritable_id' => $favoritableId,
            'favoritable_type' => $favoritableType,
            'created_at' => $timestamp,
            'published_at' => $timestamp,
            'updated_at' => null,
        ];
    }

    private function getFavoritableId(string $favoritableType): int
    {
        return match ($favoritableType) {
            'comment' => $this->getRandomCommentId(),
            'post' => $this->getRandomPostId(),
        };
    }

    private function getFavoritableType(): string
    {
        $random = mt_rand(0, 1);

        return $random === 1 ? 'comment' : 'post';
    }
}
