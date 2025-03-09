<?php

declare(strict_types=1);

namespace App\Filament\Resources\SubsiteResource\Pages;

use App\Filament\Resources\SubsiteResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateSubsite extends CreateRecord
{
    protected static string $resource = SubsiteResource::class;
}
