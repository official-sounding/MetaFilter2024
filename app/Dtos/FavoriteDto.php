<?php

declare(strict_types=1);

namespace App\Dtos;

readonly class FavoriteDto
{
    public function __construct(
        public string $favoritableType,
        public int $favoritableId,
        public int $userId,
    ) {}
}
