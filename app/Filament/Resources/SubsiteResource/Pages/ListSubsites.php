<?php

declare(strict_types=1);

namespace App\Filament\Resources\SubsiteResource\Pages;

use App\Filament\Resources\SubsiteResource;
use Filament\Actions;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

final class ListSubsites extends ListRecords
{
    protected static string $resource = SubsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
