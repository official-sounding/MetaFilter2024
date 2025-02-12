<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\FavoriteRepositoryInterface;
use App\Traits\LoggingTrait;

final class FavoriteService {
    use LoggingTrait;

    public function __construct(
        protected FavoriteRepositoryInterface $favoriteRepository,
    ) {}
}
