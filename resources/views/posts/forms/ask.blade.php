<form wire:submit="store()">
    @include('forms.partials.required-fields-note')
    @include('forms.partials.validation-summary')
    @include('livewire.post.partials.posting-as')

    <fieldset>
        <x-forms.input
            name="title"
            type="text"
            label="{{ __('Question Title') }}" />

        <div wire:ignore>
            <x-forms.textarea
                name="body"
                label="{{ __('Your Question') }}" />
        </div>
    </fieldset>

    <fieldset>
        <div wire:ignore>
            <x-forms.textarea
                name="more_inside"
                label="{{ __('More Inside') }}" />
        </div>
    </fieldset>

    <button type="submit">
        {{ __('Add Post') }}
    </button>
</form>
