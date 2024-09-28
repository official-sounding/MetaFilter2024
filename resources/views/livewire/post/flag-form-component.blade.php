<form class="flag-form" id="{{ $flagFormId }}">
    <fieldset>
        <legend>
            {{ __('Reason for flagging') }}
        </legend>
        @foreach($flagReasons as $id => $reason)
            <label for="flag-reason-{{ $id }}">
                <input
                    type="radio"
                    name="flag_reason"
                    value="{{ $id }}"
                    id="flag-reason-{{ $id }}">
                {{ $reason }}
            </label>
        @endforeach

        <label for="flag-note" class="sr-only">
            Flag note:
        </label>

        <textarea name="flag-note" id="flag-note"></textarea>
    </fieldset>

    <div class="level">
        <button type="button"
            @if ($type === 'comment')
                @click="$dispatch('hide-flag-comment-form')"
            @endif
            @if ($type === 'post')
                @click="$dispatch('hide-flag-post-form')"
            @endif
        >
            {{ __('Cancel') }}
        </button>

        <button type="button" wire:click="flag()">
            {{ __('Add Flag') }}
        </button>
    </div>
</form>
