<?php

declare(strict_types=1);

namespace App\Livewire\Register;

use App\Livewire\Register\Steps\SignupPaymentStepComponent;
use App\Livewire\Register\Steps\CreateUserStepComponent;
use App\Livewire\Register\Steps\SignupMessageStepComponent;
use Spatie\LivewireWizard\Components\WizardComponent;

final class RegisterWizardComponent extends WizardComponent
{
    public function steps(): array
    {
        return [
            SignupMessageStepComponent::class,
            CreateUserStepComponent::class,
            SignupPaymentStepComponent::class,
        ];
    }
}
