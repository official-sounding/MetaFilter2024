<?php

declare(strict_types=1);

namespace App\Livewire\Signup\Steps;

use App\Http\Requests\Register\StoreUsernameRequest;
use Illuminate\Contracts\View\View;
use Spatie\LivewireWizard\Components\StepComponent;

final class UsernameStepComponent extends StepComponent
{
    public string $username = '';

    public function stepInfo(): array
    {
        return [
            'label' => trans('Username'),
        ];
    }

    protected function rules(): array
    {
        return (new StoreUsernameRequest())->rules();
    }

    public function submit(): void
    {
        $this->validate();

        $this->nextStep();
    }

    public function render(): View
    {
        return view('livewire.signup.steps.username-step-component');
    }
}
