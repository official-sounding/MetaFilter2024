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

    @include('livewire.wizards.partials.previous-next')
</form>
