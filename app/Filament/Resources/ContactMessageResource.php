<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages\CreateContactMessage;
use App\Filament\Resources\ContactMessageResource\Pages\EditContactMessage;
use App\Filament\Resources\ContactMessageResource\Pages\ListContactMessages;
use App\Models\ContactMessage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public const int INPUT_MAX_LENGTH = 255;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('subject')
                    ->required()
                    ->maxLength(self::INPUT_MAX_LENGTH),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('subject')
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
            'index' => ListContactMessages::route('/'),
            'create' => CreateContactMessage::route('/create'),
            'edit' => EditContactMessage::route('/{record}/edit'),
        ];
    }
}
