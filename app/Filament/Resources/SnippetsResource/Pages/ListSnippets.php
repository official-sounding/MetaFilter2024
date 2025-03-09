<?php

declare(strict_types=1);

namespace App\Filament\Resources\SnippetsResource\Pages;

use App\Filament\Resources\SnippetResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

final class ListSnippets extends ListRecords
{
    protected static string $resource = SnippetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
