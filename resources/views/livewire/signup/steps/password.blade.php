<form wire:submit="store">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset class="required-fields">
        <x-forms.input
            name="password"
            type="password"
            label="{{ trans('Password') }}" />

        <x-forms.input
            name="password"
            type="password"
            label="{{ trans('Confirm Password') }}" />
    </fieldset>

    <button type="submit" class="button primary-button">
        {{ trans('Next') }}
    </button>
</form>
