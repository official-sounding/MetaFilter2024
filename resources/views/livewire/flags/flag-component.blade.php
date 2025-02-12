<form wire:submit.prevent="store($flaggableId)">
    <fieldset>
        <legend>
            {{ $titleText }}
        </legend>

        <small>
            <x-popovers.popover-component />
            {{ trans('What does it mean to flag a comment or post?') }}
        </small>

        @foreach ($flagReasons as $key => $label)
            <label class="block">
                <input
                    type="radio"
                    name="reason"
                    wire:model="selectedReasons"
                    value="{{ $key }}">
                {{ $label }}
            </label>
        @endforeach

        <label for="note" class="optional">
            {{ trans('Note') }}
        </label>

        <textarea
            wire:model="note"
            name="note"
            id="note"
            placeholder="Additional details (optional)">
        </textarea>

        <div class="level">
            <button
                type="button"
                class="button secondary-button"
                wire:click="toggleForm()">
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
