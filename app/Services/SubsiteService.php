<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\SubsiteRepositoryInterface;

final class SubsiteService
{
    public function __construct(
        protected SubsiteRepositoryInterface $subsiteRepository,
        protected SettingService $settingService,
    ) {}

    public function store(): void
    {
        $subsites = $this->subsiteRepository->all();

        $this->settingService->store('subsites', $subsites);
    }
}
