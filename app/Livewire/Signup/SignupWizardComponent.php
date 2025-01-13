<?php

declare(strict_types=1);

namespace App\Livewire\Signup;

use App\Livewire\Signup\Steps\EmailAddressStepComponent;
use App\Livewire\Signup\Steps\OptionalInfoStepComponent;
use App\Livewire\Signup\Steps\PasswordStepComponent;
use App\Livewire\Signup\Steps\SignupPaymentStepComponent;
use App\Livewire\Signup\Steps\SignupMessageStepComponent;
use App\Livewire\Signup\Steps\UsernameStepComponent;
use Spatie\LivewireWizard\Components\WizardComponent;

final class SignupWizardComponent extends WizardComponent
{
    public function steps(): array
    {
        return [
            SignupMessageStepComponent::class,
            UsernameStepComponent::class,
            EmailAddressStepComponent::class,
            PasswordStepComponent::class,
            OptionalInfoStepComponent::class,
            SignupPaymentStepComponent::class,
        ];
    }
}
