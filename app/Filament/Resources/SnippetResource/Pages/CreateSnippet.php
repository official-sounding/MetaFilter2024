<?php

declare(strict_types=1);

namespace App\Filament\Resources\SnippetResource\Pages;

use App\Filament\Resources\SnippetResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateSnippet extends CreateRecord
{
    protected static string $resource = SnippetResource::class;
}
