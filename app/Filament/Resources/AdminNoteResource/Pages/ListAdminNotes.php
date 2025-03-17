<?php

declare(strict_types=1);

namespace App\Filament\Resources\AdminNoteResource\Pages;

use App\Filament\Resources\AdminNoteResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

final class ListAdminNotes extends ListRecords
{
    protected static string $resource = AdminNoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
