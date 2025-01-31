<?php

declare(strict_types=1);

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use pxlrbt\FilamentActivityLog\Pages\ListActivities;

final class ListPostActivities extends ListActivities
{
    protected static string $resource = PostResource::class;
}
