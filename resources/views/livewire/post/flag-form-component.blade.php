<form class="flag-form" id="flag-form">
    @foreach ($flagReasons as $reason)
        <label for="{{ $reason->value }}">
            <input
                type="radio"
                name="flag_reason"
                value="{{ $reason }}"
                id="{{ $reason }}">
            {{ $reason->value }}
        </label>
    @endforeach

    <label for="flag-note" class="sr-only">
        Flag note:
    </label>

    <textarea name="flag-note" id="flag-note"></textarea>

    <div class="level">
        <button type="button" wire:click="cancel()">
            Cancel
        </button>

        <button type="button" wire:click="flag()">
            Add Flag
        </button>
    </div>
</form>
