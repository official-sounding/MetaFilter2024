<?php

declare(strict_types=1);

namespace App\Filament\Pages\Auth;

use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\Login as BaseAuth;
use Illuminate\Contracts\View\View;

final class Login extends BaseAuth
{
    protected function getLoginFormComponent(): TextInput
    {
        return $this->getUsernameFormComponent();
    }

    protected function getUsernameFormComponent(): TextInput
    {
        return TextInput::make('username')
            ->label('Username')
            ->autocomplete()
            ->required();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                $this->getEmailFormComponent(),
                $this->getLoginFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getRememberFormComponent(),
            ])
            ->statePath('data');
    }

    public function view(): View
    {
        $view = 'filament.pages.auth.login';

        return view($view);
    }
}
