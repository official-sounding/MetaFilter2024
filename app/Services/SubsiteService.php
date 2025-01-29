<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\SubsiteRepositoryInterface;

final class SubsiteService
{
    public function __construct(
        protected SubsiteRepositoryInterface $subsiteRepository,
    ) {}

    public function store(): void
    {
        $subsites = $this->subsiteRepository->all();
    }
}
