<?php

namespace App\Filament\Resources\BannerLinkResource\Pages;

use App\Filament\Resources\BannerLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBannerLink extends EditRecord
{
    protected static string $resource = BannerLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
