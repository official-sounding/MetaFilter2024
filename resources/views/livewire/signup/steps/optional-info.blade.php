<form wire:submit="store">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset>
        <x-forms.input
            name="name"
            required="false"
            autocomplete="true"
            label="{{ trans('Name') }}"
        />

        <x-forms.input
            name="website_url"
            required="false"
            autocomplete="true"
            label="{{ trans('Website URL') }}"
        />
    </fieldset>

    <button type="submit" class="button primary-button">
        {{ trans('Next') }}
    </button>
</form>
