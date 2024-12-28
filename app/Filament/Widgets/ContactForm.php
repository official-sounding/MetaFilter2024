<?php

declare(strict_types=1);

namespace App\Filament\Widgets;

use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

final class ContactForm extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                // ...
            )
            ->columns([
                // ...
            ]);
    }
}
