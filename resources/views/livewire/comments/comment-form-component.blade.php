<form
    wire:submit.prevent="store"
    @if ($isEditing === true || $isReplying === true)
        id="comment-reply-form-{{ $comment->id }}"
    @endif
>
    @include('forms.partials.validation-summary')
    @include('livewire.common.partials.posting-as')

    <fieldset>
        <div wire:ignore>
            <label for="text" class="sr-only">
                {{ trans('Comment') }}
            </label>

            <textarea wire:model="text" name="text" id="text"></textarea>
        </div>

        <div class="level">
            @if ($isEditing === true || $isReplying === true)
                <button
                    type="button"
                    class="button secondary-button"
                    wire:click="$parent.closeForm({{ $comment->id }})">
                    {{ trans('Cancel') }}
                </button>
            @endif

            <button
                type="submit"
                class="button primary-button">
                @if (!empty($buttonText))
                    {{ trans($buttonText) }}
                @else
                    {{ trans('Add Comment') }}
                @endif
            </button>
        </div>

        <small class="smaller">
            <x-icons.icon-component filename="markdown-fill" />
            <a href="https://www.markdownguide.org/basic-syntax/">
                {{ trans('Styling with Markdown is supported') }}
                <x-icons.icon-component filename="box-arrow-up-right" alt-text="External link" />
            </a>
        </small>
    </fieldset>
</form>
