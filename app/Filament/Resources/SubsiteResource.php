<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\SubsiteResource\Pages\CreateSubsite;
use App\Filament\Resources\SubsiteResource\Pages\EditSubsite;
use App\Filament\Resources\SubsiteResource\Pages\ListSubsites;
use App\Models\Subsite;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class SubsiteResource extends Resource
{
    protected static ?string $model = Subsite::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public const int INPUT_MAX_LENGTH = 255;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(self::INPUT_MAX_LENGTH),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(self::INPUT_MAX_LENGTH),
                TextInput::make('subdomain')
                    ->required()
                    ->maxLength(self::INPUT_MAX_LENGTH),
                TextInput::make('nickname')
                    ->maxLength(self::INPUT_MAX_LENGTH),
                TextInput::make('tagline')
                    ->maxLength(self::INPUT_MAX_LENGTH),
                Textarea::make('logo_filename')
                    ->columnSpanFull(),
                TextInput::make('white_text')
                    ->maxLength(self::INPUT_MAX_LENGTH),
                TextInput::make('green_text')
                    ->maxLength(self::INPUT_MAX_LENGTH),
                TextInput::make('route')
                    ->required()
                    ->maxLength(self::INPUT_MAX_LENGTH),
                TextInput::make('view')
                    ->required()
                    ->maxLength(self::INPUT_MAX_LENGTH),
                Toggle::make('has_theme')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('subdomain')
                    ->searchable(),
                TextColumn::make('nickname')
                    ->searchable(),
                TextColumn::make('tagline')
                    ->searchable(),
                TextColumn::make('white_text')
                    ->searchable(),
                TextColumn::make('green_text')
                    ->searchable(),
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
            'index' => ListSubsites::route('/'),
            'create' => CreateSubsite::route('/create'),
            'edit' => EditSubsite::route('/{record}/edit'),
        ];
    }
}
