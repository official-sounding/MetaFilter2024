<form wire:submit.prevent="store()">
    <fieldset>
        <legend>
            {{ $titleText }}
        </legend>

        <small>
            <x-popovers.popover-component
                button-text="{{ trans('What does it mean to flag a comment or post?') }}"
                popover-text="{{ trans('What does it mean to flag a comment or post?') }}"
                show-info-icon="true"
            />
        </small>

        @foreach ($flagReasons as $reason)
            <label class="block radio-button-label">
                <input
                    type="radio"
                    name="flag_reason_id"
                    @if ($reason === 'Fantastic')
                        class="fantastic"
                    @endif
                    wire:model="selectedReason"
                    wire:change="flagReasonSelected('{{ $reason }}')"
                    value="{{ $reason }}">
                {{ $reason }}
            </label>
        @endforeach

        @if ($showNoteField === true)
            <label for="note" class="optional">
                {{ trans('Note') }}
            </label>

            <textarea
                wire:model="note"
                name="note"
                id="note"
                wire:model="note"
                placeholder="{{ trans('Additional details (optional)') }}">
            </textarea>
        @endif

        <div class="level">
            <button
                type="button"
                class="button secondary-button"
                wire:click="$parent.closeForm()">
                {{ trans('Cancel') }}
            </button>

            <button
                type="submit"
                class="button primary-button">
                {{ trans('Add Flag') }}
            </button>
        </div>
    </fieldset>
</form>
