<?php

declare(strict_types=1);

namespace App\Livewire\Register;

use App\Livewire\Register\Steps\RegisterPaymentStepComponent;
use App\Livewire\Register\Steps\RequiredFieldsStepComponent;
use Spatie\LivewireWizard\Components\WizardComponent;

final class RegisterWizardComponent extends WizardComponent
{
    public function steps(): array
    {
        return [
            RequiredFieldsStepComponent::class,
            RegisterPaymentStepComponent::class,
        ];
    }
}
