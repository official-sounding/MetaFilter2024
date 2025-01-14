<?php

declare(strict_types=1);

namespace App\Livewire\Signup;

use Spatie\LivewireWizard\Support\State;

final class NewUserState extends State
{
    public function newUserData(): array
    {
        $emailAddressStepState = $this->forStep('email-address-step-component');
        $optionalInfoStepState = $this->forStep('optional-info-step-component');
        $passwordStepState = $this->forStep('password-step-component');
        $usernameStepState = $this->forStep('username-step-component');

        return [
            'username' => $usernameStepState['username'],
            'email' => $emailAddressStepState['$emailAddressStepState'],
            'password' => $passwordStepState['password'],
            'name' => $optionalInfoStepState['name'] ?? null,
            'homepage_url' => $optionalInfoStepState['homepage_url'] ?? null,
        ];
    }
}
