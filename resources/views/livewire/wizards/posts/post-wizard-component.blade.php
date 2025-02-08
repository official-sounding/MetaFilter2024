<section>
    @include('livewire.wizards.partials.steps')

    @if ($currentStep === 1)
        @include('livewire.wizards.posts.steps.01-post-form-step')
    @elseif ($currentStep === 2)
        @include('livewire.wizards.posts.steps.02-tags-step')
    @elseif ($currentStep === 3)
        @include('livewire.wizards.posts.steps.03-preview-step')
    @endif
</section>
