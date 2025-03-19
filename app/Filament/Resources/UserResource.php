<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Models\User;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DateTimePicker;
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
use STS\FilamentImpersonate\Impersonate;

final class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public const int INPUT_MAX_LENGTH = 255;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('username')
                    ->maxLength(self::INPUT_MAX_LENGTH),
                TextInput::make('name')
                    ->maxLength(self::INPUT_MAX_LENGTH),
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(self::INPUT_MAX_LENGTH),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(self::INPUT_MAX_LENGTH),
                Textarea::make('two_factor_secret')
                    ->columnSpanFull(),
                Textarea::make('two_factor_recovery_codes')
                    ->columnSpanFull(),
                TextInput::make('homepage_url')
                    ->maxLength(self::INPUT_MAX_LENGTH),
                Toggle::make('agrees_to_terms'),
                TextInput::make('legacy_id')
                    ->numeric(),
                TextInput::make('state')
                    ->required()
                    ->maxLength(self::INPUT_MAX_LENGTH),
                TextInput::make('stripe_id')
                    ->maxLength(self::INPUT_MAX_LENGTH),
                TextInput::make('pm_type')
                    ->maxLength(self::INPUT_MAX_LENGTH),
                TextInput::make('pm_last_four')
                    ->maxLength(4),
                DateTimePicker::make('trial_ends_at'),
                DateTimePicker::make('banned_at'),
                CheckboxList::make('roles')
                    ->relationship('roles', 'name')
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('username')
                    ->searchable(),
                TextColumn::make('name')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                Impersonate::make(),
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
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}
