<?php

declare(strict_types=1);

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

final class PostWidget extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Post::query()->whereNull([
                    'is_current',
                    'is_published',
                    'published_at',
                ])
                ->latest()
                ->take(20),
            )
            ->columns([
                TextColumn::make('title'),
            ]);
    }
}
