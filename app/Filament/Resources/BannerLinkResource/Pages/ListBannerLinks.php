<?php

declare(strict_types=1);

namespace App\Filament\Resources\BannerLinkResource\Pages;

use App\Filament\Resources\BannerLinkResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

final class ListBannerLinks extends ListRecords
{
    protected static string $resource = BannerLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
