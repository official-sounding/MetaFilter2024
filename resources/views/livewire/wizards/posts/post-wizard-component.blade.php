<section>
    @include('livewire.wizards.partials.steps')

    @if ($currentStep === 1)
        @include('livewire.wizards.posts.steps.01-title-and-link-step')
    @elseif ($currentStep === 2)
        @include('livewire.wizards.posts.steps.02-body-step')
    @elseif ($currentStep === 3)
        @include('livewire.wizards.posts.steps.03-more-inside-step')
    @elseif ($currentStep === 4)
        @include('livewire.wizards.posts.steps.04-tags-step')
    @else ($currentStep === 5)
        @include('livewire.wizards.posts.steps.05-preview-step')
    @endif
</section>
