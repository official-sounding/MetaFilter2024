<form wire:submit.prevent="store()">
    @include('forms.partials.validation-summary')
    @include('livewire.common.partials.posting-as')

    <fieldset>
        <x-forms.input
            name="title"
            type="text"
            label="{{ trans('Post Title') }}" />

        <div wire:ignore>
            <x-forms.textarea
                name="body"
                label="{{ trans('Body') }}" />
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

@push('scripts')
    @include('livewire.posts.partials.wysiwyg-scripts')
@endpush
