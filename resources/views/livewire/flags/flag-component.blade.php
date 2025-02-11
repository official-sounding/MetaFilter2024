<div>
    @auth
        @if ($userFlagged === true)
            <button wire:click="delete($flaggableId)" title="{{ trans('Remove flag') }}">
                <span class="icon">
                    <img src="{{ asset("images/icons/$iconFilename.svg") }}"
                         alt="{{ trans('Flag icon') }}"
                         title="{{ $titleText }}">
                </span>
                {{ $flagCount }}
            </button>
        @else
            <button wire:click="toggleForm()">
                <span class="icon">
                    <img src="{{ asset("images/icons/$iconFilename.svg") }}"
                         alt="{{ trans('Flag icon') }}"
                         title="{{ $titleText }}">
                </span>
            </button>
        @endif
    @endauth

    @guest
        <button
            disabled="disabled"
            class="button">
            {{ $flagCount }}
        </button>
    @endguest

    @if ($showForm)
        <form wire:submit.prevent="store($flaggableId)">
            <fieldset>
                <legend>
                    {{ $titleText }}
                </legend>

                @foreach ($flagReasons as $key => $label)
                    <label class="block">
                        <input type="checkbox" wire:model="selectedReasons" value="{{ $key }}"> {{ $label }}
                    </label>
                @endforeach

                <label for="note" class="optional">
                    {{ trans('Note') }}
                </label>

                <textarea
                    wire:model="note"
                    name="note"
                    id="note"
                    placeholder="Additional details (optional)" >
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
    @endif
</div>
