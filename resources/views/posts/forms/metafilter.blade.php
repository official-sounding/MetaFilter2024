<form wire:submit="store()">
    @include('forms.partials.required-fields-note')
    @include('forms.partials.validation-summary')
    @include('livewire.post.partials.posting-as')

    <fieldset>
        <x-forms.input
            name="title"
            type="text"
            label="{{ __('Post Title') }}" />

        <x-forms.input
            name="url"
            type="url"
            label="{{ __('Link URL') }}" />

        <x-forms.input
            name="link_text"
            type="text"
            label="{{ __('Link Text') }}" />

        <div wire:ignore>
            <x-forms.textarea
                name="body"
                label="{{ __('Body') }}" />
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
