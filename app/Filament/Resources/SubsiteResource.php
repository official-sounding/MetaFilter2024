<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubsiteResource\Pages;
use App\Models\Subsite;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SubsiteResource extends Resource
{
    protected static ?string $model = Subsite::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('subdomain')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nickname')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tagline')
                    ->maxLength(255),
                Forms\Components\Textarea::make('logo_filename')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('white_text')
                    ->maxLength(255),
                Forms\Components\TextInput::make('green_text')
                    ->maxLength(255),
                Forms\Components\TextInput::make('route')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('view')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('has_theme')
                    ->required(),
                Forms\Components\TextInput::make('footer_navigation_sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('global_navigation_sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\Toggle::make('in_dropdown')
                    ->required(),
                Forms\Components\Toggle::make('in_footer_nav')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subdomain')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nickname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tagline')
                    ->searchable(),
                Tables\Columns\TextColumn::make('white_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('green_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('route')
                    ->searchable(),
                Tables\Columns\TextColumn::make('view')
                    ->searchable(),
                Tables\Columns\IconColumn::make('has_theme')
                    ->boolean(),
                Tables\Columns\TextColumn::make('footer_navigation_sort_order')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('global_navigation_sort_order')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('in_dropdown')
                    ->boolean(),
                Tables\Columns\IconColumn::make('in_footer_nav')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSubsites::route('/'),
            'create' => Pages\CreateSubsite::route('/create'),
            'edit' => Pages\EditSubsite::route('/{record}/edit'),
        ];
    }
}
