<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\SubsiteResource\Pages;
use App\Filament\Resources\SubsiteResource\Pages\CreateSubsite;
use App\Filament\Resources\SubsiteResource\Pages\EditSubsite;
use App\Filament\Resources\SubsiteResource\Pages\ListSubsites;
use App\Models\Subsite;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class SubsiteResource extends Resource
{
    protected static ?string $model = Subsite::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                TextInput::make('subdomain')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nickname')
                    ->maxLength(255),
                TextInput::make('tagline')
                    ->maxLength(255),
                Textarea::make('logo_filename')
                    ->columnSpanFull(),
                TextInput::make('white_text')
                    ->maxLength(255),
                TextInput::make('green_text')
                    ->maxLength(255),
                TextInput::make('route')
                    ->required()
                    ->maxLength(255),
                TextInput::make('view')
                    ->required()
                    ->maxLength(255),
                Toggle::make('has_theme')
                    ->required(),
                TextInput::make('footer_navigation_sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('global_navigation_sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('in_dropdown')
                    ->required(),
                Toggle::make('in_footer_nav')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('slug')
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
                TextColumn::make('route')
                    ->searchable(),
                TextColumn::make('view')
                    ->searchable(),
                IconColumn::make('has_theme')
                    ->boolean(),
                TextColumn::make('footer_navigation_sort_order')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('global_navigation_sort_order')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('in_dropdown')
                    ->boolean(),
                IconColumn::make('in_footer_nav')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
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
            'index' => ListSubsites::route('/'),
            'create' => CreateSubsite::route('/create'),
            'edit' => EditSubsite::route('/{record}/edit'),
        ];
    }
}
