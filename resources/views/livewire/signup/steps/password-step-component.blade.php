<form wire:submit="submit">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset>
        <x-forms.input
            name="password"
            type="password"
            label="{{ trans('Next, enter a password') }}" />

        <x-forms.input
            name="password_confirmation"
            type="password"
            label="{{ trans('And confirm your password') }}" />
    </fieldset>

    <div class="previous-next">
        <button type="button" class="button primary-button previous" wire:click="previousStep">
            {{ trans('Previous') }}
        </button>

        <button type="submit" class="button primary-button next">
            {{ trans('Next') }}
        </button>
    </div>
</form>
