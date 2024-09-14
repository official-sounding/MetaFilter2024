@if (isset($showFlagForm) && $showFlagForm === true)
    <form class="flag-form" id="flag-form">
        @foreach ($flagReasons as $id => $reason)
            <label for="{{ $id }}">
                <input type="radio"
                       name="flag_reason"
                       value="{{ $id }}"
                       id="{{ $id }}">
                {{ $reason }}
            </label>
        @endforeach

        <label for="flag-reason">Flag reason:</label>
        <textarea
            name="flag-reason"
            id="flag-reason">
            </textarea>

        <button type="submit"
                wire:click="flag()">
            Add Flag
        </button>
    </form>
@endif
