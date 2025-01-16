<div>
    @if ($currentStep === 1)
        @include('livewire.wizards.posts.steps.01-title-and-link-step')
    @endif

    @if ($currentStep === 2)
        @include('livewire.wizards.posts.steps.02-body-step')
    @endif

    @if ($currentStep === 3)
        @include('livewire.wizards.posts.steps.03-more-inside-step')
    @endif

    @if ($currentStep === 4)
        @include('livewire.wizards.posts.steps.04-tags-step')
    @endif

    @if ($currentStep === 5)
        @include('livewire.wizards.posts.steps.05-preview-step')
    @endif
</div>
