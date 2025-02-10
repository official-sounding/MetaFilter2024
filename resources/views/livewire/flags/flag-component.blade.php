<form>
    <button></button>
</form>

{{--
<form>
    <button
        @auth
            wire:click="toggleForm()"
        @endauth
        @guest
            disabled="disabled"
        @endguest
        class="button">
    <span class="icon">
        <img src="{{ asset("images/icons/$iconFilename.svg") }}"
             alt="{{ trans('Flag icon') }}"
             title="{{ $titleText }}">
    </span>
        {{ $flagCount }}
    </button>

    @if ($showForm)
        <form>
            <fieldset>

            <legend>
                {{ $titleText }}
            </legend>

            @foreach ($flagReasons as $key => $label)
                <label class="block">
                    <input type="checkbox" wire:model="selectedReasons" value="{{ $key }}"> {{ $label }}
                </label>
            @endforeach

            <textarea wire:model="note" placeholder="Additional details (optional)" ></textarea>

            <button wire:click="flagComment">
                Submit Flag
            </button>
            </fieldset>
        </form>
    @endif

    <div class="mt-2">
        <span class="text-sm text-gray-600">Flags: </span>
        @if ($userFlagged)
            <button wire:click="removeFlag()">
                Remove Flag
            </button>
        @endif
    </div>
</form>
--}}
