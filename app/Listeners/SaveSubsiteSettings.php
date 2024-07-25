<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Events\SubsiteSaved;
use App\Services\SubsiteService;

final class SaveSubsiteSettings
{
    public function __construct(protected SubsiteService $subsiteService) {}

    public function handle(SubsiteSaved $event): void
    {
        $this->subsiteService->store();
    }
}
