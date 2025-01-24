<section>
    @include('livewire.wizards.partials.steps')

    @if ($currentStep === 1)
        @include('livewire.wizards.signup.steps.01-username-step')
    @elseif ($currentStep === 2)
        @include('livewire.wizards.signup.steps.02-password-step')
    @elseif ($currentStep === 3)
        @include('livewire.wizards.signup.steps.03-email-step')
    @elseif ($currentStep === 4)
        @include('livewire.wizards.signup.steps.04-optional-info-step')
    @else ($currentStep === 5)
        @include('livewire.wizards.signup.steps.05-payment-step')
    @endif

    <div>
        <div wire:loading.flex wire:target="next, previous, submit, switchStep">
            LOADING
        </div>
    </div>

    <div>
        <button class="p-2 rounded {{ $currentStep === 1 ? 'bg-gray-200' : 'bg-purple-300' }}"
                wire:click="previous">Previous</button>
        @if ($currentStep < $totalSteps)
            <button
                class="p-2 rounded {{ $currentStep === $totalSteps ? 'bg-gray-200' : 'bg-purple-300' }}"
                wire:click="next">Next</button>
        @endif
        @if ($currentStep == $totalSteps)
            <button class="p-2 rounded bg-purple-400" wire:click="submit">Submit</button>
        @endif
    </div>
</section>
