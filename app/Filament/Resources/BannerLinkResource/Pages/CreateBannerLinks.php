<?php

declare(strict_types=1);

namespace App\Filament\Resources\BannerLinkResource\Pages;

use App\Filament\Resources\BannerLinkResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateBannerLinks extends CreateRecord
{
    protected static string $resource = BannerLinkResource::class;
}
