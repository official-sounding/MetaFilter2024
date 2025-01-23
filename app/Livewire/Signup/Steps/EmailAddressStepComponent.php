<?php

declare(strict_types=1);

namespace App\Livewire\Signup\Steps;

use App\Http\Requests\Signup\StoreEmailAddressRequest;
use Illuminate\Contracts\View\View;
use Spatie\LivewireWizard\Components\StepComponent;

final class EmailAddressStepComponent extends StepComponent
{
    public string $email = '';

    public function stepInfo(): array
    {
        return [
            'label' => trans('Email Address'),
        ];
    }

    protected function rules(): array
    {
        return (new StoreEmailAddressRequest())->rules();
    }

    public function submit(): void
    {
        $this->validate();

        $this->nextStep();
    }

    public function render(): View
    {
        return view('livewire.signup.steps.email-address-step-component');
    }
}
