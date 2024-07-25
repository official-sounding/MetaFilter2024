<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Subsite;

final class SubsiteRepository extends BaseRepository implements SubsiteRepositoryInterface
{
    public function __construct(Subsite $model)
    {
        parent::__construct($model);
    }

    public function getFooterNavigationItems(): array
    {
        // TODO: Implement getFooterNavigationItems() method.
    }

    public function getGlobalNavigationItems(): array
    {
        // TODO: Implement getGlobalNavigationItems() method.
    }
}
