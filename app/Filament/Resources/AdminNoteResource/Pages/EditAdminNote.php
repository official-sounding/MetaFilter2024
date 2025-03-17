<?php

declare(strict_types=1);

namespace App\Filament\Resources\AdminNoteResource\Pages;

use App\Filament\Resources\AdminNoteResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditAdminNote extends EditRecord
{
    protected static string $resource = AdminNoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
