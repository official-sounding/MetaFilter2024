<form wire:submit="store()">
    @include('forms.partials.required-fields-note')
    @include('forms.partials.validation-summary')
    @include('livewire.post.partials.posting-as')

    <fieldset>
        <x-forms.input
            name="title"
            type="text"
            label="{{ trans('Question Title') }}" />

        <div wire:ignore>
            <x-forms.textarea
                name="body"
                label="{{ trans('Your Question') }}" />
        </div>
    </fieldset>

    <fieldset>
        <div wire:ignore>
            <x-forms.textarea
                name="more_inside"
                label="{{ trans('More Inside') }}" />
        </div>
    </fieldset>

    <button type="submit" class="button primary-button">
        {{ trans('Add Post') }}
    </button>
</form>
