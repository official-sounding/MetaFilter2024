<form wire:submit="store">
    @include('forms.partials.required-fields-note')
    @include('forms.partials.validation-summary')
    @include('livewire.post.partials.posting-as')

    <div wire:ignore>
        <label for="body" class="sr-only">
            {{ trans('Comment') }}
        </label>

        <textarea wire:model="body" name="body" id="body"></textarea>
    </div>

    <button type="submit" class="button primary-button" wire:keydown.escape="{{ $cancelAction }}">
        @if (!is_null($buttonText))
            {{ trans($buttonText) }}
        @else
            {{ trans('Add Comment') }}
        @endif
    </button>

    <button type="button" class="button secondary-button" wire:click="{{ $cancelAction }}">
        {{ trans('Cancel') }}
    </button>
</form>
{{--
@push('scripts')
    @include('livewire.post.partials.wysiwyg-scripts')
@endpush
--}}
