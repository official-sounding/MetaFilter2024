<?php

declare(strict_types=1);

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

final class Posts extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Post::query(),
            )
            ->columns([
                // ...
            ]);
    }
}
