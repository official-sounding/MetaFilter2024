<form wire:submit.prevent="store()">
    @include('forms.partials.csrf-token')
    @include('forms.partials.validation-summary')
    @include('livewire.common.partials.posting-as')

    <x-forms.input
        name="title"
        type="text"
        label="{{ trans('Post Title') }}" />

    <div wire:ignore>
        <x-forms.textarea
            name="body"
            label="{{ trans('Body') }}" />
    </div>

    <div wire:ignore>
        <x-forms.textarea
            name="more_inside"
            label="{{ trans('More Inside') }}" />
    </div>

    <x-forms.input
        name="tags"
        type="text"
        :note="{!! trans('Combine and capitalize words, <strong>LikeThis</strong>') !!}"
        label="{{ trans('Tags') }}" />

    <button type="submit" class="button primary-button">
        {{ trans('Add Post') }}
    </button>
</form>

@push('scripts')
    @include('livewire.posts.partials.wysiwyg-scripts')
@endpush
