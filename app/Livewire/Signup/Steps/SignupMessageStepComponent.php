<?php

declare(strict_types=1);

namespace App\Livewire\Signup\Steps;

use Illuminate\Contracts\View\View;
use Spatie\LivewireWizard\Components\StepComponent;

final class SignupMessageStepComponent extends StepComponent
{
    public function stepInfo(): array
    {
        return [
            'label' => 'Signup Info',
        ];
    }

    public function submit(): void
    {
        $this->nextStep();
    }

    public function render(): View
    {
        return view('livewire.signup.steps.signup-info');
    }
}
