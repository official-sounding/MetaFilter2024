<?php

declare(strict_types=1);

namespace App\Livewire\Signup\Steps;

use App\Http\Requests\Register\StoreOptionalInfoRequest;
use Illuminate\Contracts\View\View;
use Spatie\LivewireWizard\Components\StepComponent;

final class OptionalInfoStepComponent extends StepComponent
{
    public string $name = '';
    public string $homepage_url = '';

    public function stepInfo(): array
    {
        return [
            'label' => trans('Optional Info'),
        ];
    }

    protected function rules(): array
    {
        return new StoreOptionalInfoRequest()->rules();
    }

    public function submit(): void
    {
        $this->validate();

        $this->nextStep();
    }

    public function render(): View
    {
        return view('livewire.signup.steps.optional-info-step-component');
    }
}
