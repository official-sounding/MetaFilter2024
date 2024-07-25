<?php

namespace App\Filament\Resources\SubsiteResource\Pages;

use App\Filament\Resources\SubsiteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubsite extends EditRecord
{
    protected static string $resource = SubsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
