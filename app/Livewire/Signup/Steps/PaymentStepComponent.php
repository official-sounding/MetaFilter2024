<?php

declare(strict_types=1);

namespace App\Livewire\Signup\Steps;

use App\Enums\RouteNameEnum;
use Illuminate\Contracts\View\View;
use Spatie\LivewireWizard\Components\StepComponent;

final class PaymentStepComponent extends StepComponent
{
    public function stepInfo(): array
    {
        return [
            'label' => trans('Payment'),
        ];
    }

    public function render(): View
    {
        return view('livewire.signup.steps.payment-step-component');
    }

    public function payWithPayPal(): void
    {
        $this->redirectToConfirmation();
    }

    public function payWithStripe(): void
    {
        $this->redirectToConfirmation();
    }

    private function redirectToConfirmation(): void
    {
        redirect()->route(RouteNameEnum::SignupThanks);
    }
}
