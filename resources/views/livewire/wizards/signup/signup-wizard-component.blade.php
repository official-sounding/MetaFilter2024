<div>
    @if ($currentStep === 1)
        @include('livewire.wizards.signup.steps.01-username-step')
    @endif

    @if ($currentStep === 2)
        @include('livewire.wizards.signup.steps.02-password-step')
    @endif

    @if ($currentStep === 3)
        @include('livewire.wizards.signup.steps.03-email-step')
    @endif

    @if ($currentStep === 4)
        @include('livewire.wizards.signup.steps.04-optional-info-step')
    @endif

    @if ($currentStep === 5)
        @include('livewire.wizards.signup.steps.05-payment-step')
    @endif
</div>
