<form wire:submit="store()">
    @include('forms.partials.required-fields-note')
    @include('forms.partials.validation-summary')
    @include('livewire.post.partials.posting-as')

    <div wire:ignore>
        <label for="contents">Comment</label>
        <textarea wire:model.live="contents" name="contents" id="contents"></textarea>
    </div>

    <button type="submit">
        {{ __('Add Comment') }}
    </button>
</form>

@push('scripts')
    @include('livewire.post.partials.wysiwyg-scripts')
@endpush
