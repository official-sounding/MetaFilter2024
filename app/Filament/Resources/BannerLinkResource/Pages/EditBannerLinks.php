<?php

declare(strict_types=1);

namespace App\Filament\Resources\BannerLinkResource\Pages;

use App\Filament\Resources\BannerLinkResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditBannerLinks extends EditRecord
{
    protected static string $resource = BannerLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
