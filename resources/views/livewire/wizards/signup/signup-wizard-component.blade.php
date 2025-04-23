<section>
    @include('livewire.wizards.partials.steps')

    @if ($currentStep === 1)
        @include('livewire.wizards.signup.steps.01-username-step')
    @elseif ($currentStep === 2)
        @include('livewire.wizards.signup.steps.02-password-step')
    @elseif ($currentStep === 3)
        @include('livewire.wizards.signup.steps.03-email-step')
    @elseif ($currentStep === 4)
        @include('livewire.wizards.signup.steps.04-payment-step')
    @endif

    <div>
        <div wire:loading.flex wire:target="next, previous, submit, switchStep">
            LOADING
        </div>
    </div>
</section>
