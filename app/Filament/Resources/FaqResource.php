<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages\CreateFaqs;
use App\Filament\Resources\FaqResource\Pages\EditFaqs;
use App\Filament\Resources\FaqResource\Pages\ListFaqs;
use App\Models\Faq;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public const int INPUT_MAX_LENGTH = 255;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(self::INPUT_MAX_LENGTH),
                TextInput::make('url')
                    ->required()
                    ->maxLength(self::INPUT_MAX_LENGTH),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question')
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

    public static function getPages(): array
    {
        return [
            'index' => ListFaqs::route('/'),
            'create' => CreateFaqs::route('/create'),
            'edit' => EditFaqs::route('/{record}/edit'),
        ];
    }
}
