<div>
    <button wire:click="toggleForm">
        {{ $showForm ? 'Cancel' : 'Flag Comment' }}
    </button>

    @if ($showForm)
        <form>
            @foreach ($flagReasons as $key => $label)
                <label>
                    <input type="radio" wire:model="selectedReasonId" value="{{ $key }}">
                    {{ $label }}
                </label>
            @endforeach

            @if ($showNoteField)
                <textarea wire:model="note"></textarea>
            @endif

            <button wire:click="flagComment">
                Submit Flag
            </button>
        </form>
    @endif

    <div>
        <span>Flags: {{ $flagCount }}</span>

        @if ($userFlagged)
            <button wire:click="removeFlag">
                Remove Flag
            </button>
        @endif
    </div>
</div>
