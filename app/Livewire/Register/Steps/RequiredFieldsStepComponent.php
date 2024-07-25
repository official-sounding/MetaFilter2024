<?php

declare(strict_types=1);

namespace App\Livewire\Register\Steps;

use Illuminate\Contracts\View\View;
use Spatie\LivewireWizard\Components\StepComponent;

final class RequiredFieldsStepComponent extends StepComponent
{
    public function stepInfo(): array
    {
        return [
            'label' => 'Required Fields',
        ];
    }

    public array $rules = [
        'amount' => [
            'numeric',
            'min:1',
            'max:5',
        ],
    ];

    public function submit(): void
    {
        $this->validate();

        $this->nextStep();
    }

    public function render(): View
    {
        return view('livewire.wizards.register.steps.required-fields', [
        ]);
    }
}
