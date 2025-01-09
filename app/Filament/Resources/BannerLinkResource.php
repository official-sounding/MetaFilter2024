<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\BannerLinkResource\Pages\CreateBannerLink;
use App\Filament\Resources\BannerLinkResource\Pages\EditBannerLink;
use App\Filament\Resources\BannerLinkResource\Pages\ListBannerLinks;
use App\Models\BannerLink;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class BannerLinkResource extends Resource
{
    protected static ?string $model = BannerLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('url')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBannerLinks::route('/'),
            'create' => CreateBannerLink::route('/create'),
            'edit' => EditBannerLink::route('/{record}/edit'),
        ];
    }
}
