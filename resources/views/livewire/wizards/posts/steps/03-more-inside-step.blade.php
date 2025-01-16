<form>
    @include('forms.partials.csrf-token')

    <fieldset>
        <div wire:ignore>
            <x-forms.textarea
                name="more_inside"
                label="{{ trans('More Inside') }}" />
        </div>
    </fieldset>

    @include('livewire.wizards.partials.previous-next')
</form>
