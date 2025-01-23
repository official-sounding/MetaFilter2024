<div class="previous-next">
    @if (isset($previousStep))
        @include('livewire.wizards.partials.previous-next-button', [
            'direction' => 'Previous',
            'goToStep' => $previousStep,
        ])
    @endif

    @if (isset($nextStep))
        @include('livewire.wizards.partials.previous-next-button', [
            'direction' => 'Next',
            'goToStep' => $nextStep,
        ])
    @endif
</div>
