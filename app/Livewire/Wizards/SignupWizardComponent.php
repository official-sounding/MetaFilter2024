<?php

declare(strict_types=1);

namespace App\Livewire\Wizards;

use App\Models\User;
use Illuminate\Contracts\View\View;

final class SignupWizardComponent extends BaseWizardComponent
{
    public string $email;
    public string $name;
    public string $homepage_url;
    public string $password;
    public string $username;
    public User $user;

    public function boot(): void
    {
        $this->user = User::make();
    }

    public function render(): View
    {
        return view('livewire.wizards.signup.signup-wizard-component');
    }

    // Step 1
    public function submitUsername(): void
    {
        // TODO: Match max lengths with database field lengths

        $this->validate([
            'username' => [
                'required',
                'string',
                'max:255',
            ],
        ]);

        $this->user->username = $this->username;

        $this->currentStep = 2;
    }

    // Step 2
    public function submitEmail(): void
    {
        $this->validate([
            'email' => [
                'required',
                'string',
                'max:255',
                'email',
            ],
        ]);

        $this->user->email = $this->email;

        $this->currentStep = 3;
    }

    // Step 3
    public function submitPassword(): void
    {
        $this->validate([
            'password' => [
                'required',
                'confirmed',
            ],
        ]);

        $this->user->password = bcrypt($this->password);

        $this->currentStep = 4;
    }

    // Step 4
    public function submitOptionalInfo(): void
    {
        $this->validate([
            'name' => [
                'nullable',
                'string',
                'max:255',
            ],
            'homepage_url' => [
                'nullable',
                'string',
                'max:255',
                'url:https',
                'active_url',
            ],
        ]);

        $this->user->name = $this->name ?? null;
        $this->user->homepage_url = $this->homepage_url ?? null;

        $this->currentStep = 5;
    }

    // Step 5
    public function submitPayment(): void
    {
        $this->currentStep = 6;
    }

    public function store(): void
    {
        $stored = $this->user->save();

        if ($stored) {
            // TODO: Move to messages enum and translate

            $this->logInfo('User created');

            session()->flash('message', 'User created');
        } else {
            $this->logError('User creation failed');

            session()->flash('error', 'User creation failed');
        }

        $this->resetForm();

        // TODO: Redirect to thanks page
    }

    public function resetForm(): void
    {
        $this->email = '';
        $this->homepage_url = '';
        $this->name = '';
        $this->password = '';
        $this->username = '';

        $this->user = User::make();
    }
}
