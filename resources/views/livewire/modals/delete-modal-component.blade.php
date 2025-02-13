<dialog @if($isOpen === true) open @endif>
    <p>Greetings, one and all!</p>

    <form method="dialog">
        <div class="level">
            <button wire:click="closeModal">
                {{-- TODO: Add x icon --}}
                {{ trans('Close') }}
            </button>

            <button>
                {{ trans('OK') }}
            </button>
        </div>
    </form>
</dialog>
