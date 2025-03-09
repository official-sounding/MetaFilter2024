<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\BannerLinkResource\Pages\CreateBannerLinks;
use App\Filament\Resources\BannerLinkResource\Pages\EditBannerLinks;
use App\Filament\Resources\BannerLinkResource\Pages\ListBannerLinks;
use App\Models\BannerLink;
use Filament\Actions\EditAction;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Table;

final class BannerLinkResource extends Resource
{
    protected static ?string $model = BannerLink::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'create' => CreateBannerLinks::route('/create'),
            'edit' => EditBannerLinks::route('/{record}/edit'),
        ];
    }
}
