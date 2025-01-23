<?php

declare(strict_types=1);

namespace App\Livewire\Signup\Steps;

use App\Http\Requests\Signup\StorePasswordRequest;
use Illuminate\Contracts\View\View;
use Spatie\LivewireWizard\Components\StepComponent;

final class PasswordStepComponent extends StepComponent
{
    public string $password = '';
    public string $password_confirmation = '';

    public function stepInfo(): array
    {
        return [
            'label' => trans('Password'),
        ];
    }

    protected function rules(): array
    {
        return (new StorePasswordRequest())->rules();
    }

    public function submit(): void
    {
        $this->validate();

        $this->nextStep();
    }

    public function render(): View
    {
        return view('livewire.signup.steps.password-step-component');
    }
}
