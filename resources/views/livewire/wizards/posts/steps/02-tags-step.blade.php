<form class="has-steps" wire:submit.prevent="submitMoreInside()">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    form for adding tags

    <div class="level">
        <x-forms.button
            class="secondary-button previous-step"
            type="button"
            wire:click="goToStep(1)">
            {{ trans('Previous') }}
        </x-forms.button>

        <x-forms.button
            type="submit"
            class="primary-button next-step">
            {{ trans('Next') }}
        </x-forms.button>
    </div>
</form>
