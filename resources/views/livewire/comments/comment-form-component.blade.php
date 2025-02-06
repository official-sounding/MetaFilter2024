<form wire:submit="store">
    @include('forms.partials.validation-summary')
    @include('livewire.posts.partials.posting-as')

    <fieldset>
        <div wire:ignore>
            <label for="text" class="sr-only">
                {{ trans('Comment') }}
            </label>

            <textarea wire:model="text" name="text" id="text"></textarea>
        </div>

        <div class="level">
            <button type="button" class="button secondary-button" wire:click="{{ $cancelAction }}">
                {{ trans('Cancel') }}
            </button>

            <button type="submit" class="button primary-button" wire:keydown.escape="{{ $cancelAction }}">
                @if (!empty($buttonText))
                    {{ trans($buttonText) }}
                @else
                    {{ trans('Add Comment') }}
                @endif
            </button>
        </div>
    </fieldset>
</form>
{{--
@push('scripts')
    @include('livewire.posts.partials.wysiwyg-scripts')
@endpush
--}}
