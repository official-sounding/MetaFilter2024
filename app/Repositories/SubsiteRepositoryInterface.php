<?php

declare(strict_types=1);

namespace App\Repositories;

interface SubsiteRepositoryInterface extends BaseRepositoryInterface
{
    public function getFooterNavigationItems(): array;
    public function getGlobalNavigationItems(): array;
}
