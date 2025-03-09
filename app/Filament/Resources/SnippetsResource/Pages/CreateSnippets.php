<?php

declare(strict_types=1);

namespace App\Filament\Resources\SnippetsResource\Pages;

use App\Filament\Resources\SnippetResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateSnippets extends CreateRecord
{
    protected static string $resource = SnippetResource::class;
}
