<?php

declare(strict_types=1);

namespace App\Livewire\Register\Steps;

use App\Services\UserService;
use Illuminate\Contracts\View\View;
use Spatie\LivewireWizard\Components\StepComponent;

final class RegisterPaymentStepComponent extends StepComponent
{
    protected UserService $userService;

    public function mount(UserService $userService): void
    {
        $this->userService = $userService;
    }

    public function stepInfo(): array
    {
        return [
            'label' => 'Required Fields',
        ];
    }

    public $amount = 1;

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
    }

    public function render(): View
    {
        return view('livewire.wizards.register.steps.register-payment', [
        ]);
    }
}
