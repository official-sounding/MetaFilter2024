<form wire:submit.prevent="submitMoreInside()">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    form for adding tags

    <fieldset class="level">
        <x-forms.button type="submit">
            {{ trans('Next') }}
        </x-forms.button>
    </fieldset>
</form>
