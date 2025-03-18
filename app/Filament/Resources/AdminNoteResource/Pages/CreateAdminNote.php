<?php

declare(strict_types=1);

namespace App\Filament\Resources\AdminNoteResource\Pages;

use App\Filament\Resources\AdminNoteResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateAdminNote extends CreateRecord
{
    protected static string $resource = AdminNoteResource::class;
}
