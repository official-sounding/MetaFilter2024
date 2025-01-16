<form>
    @include('forms.partials.csrf-token')

    <div wire:ignore>
        <x-forms.textarea
            name="body"
            label="{{ trans('Body') }}" />
    </div>

    @include('livewire.wizards.partials.previous-next')
</form>
