<div>
    <button wire:click="openModal">
        Open Modal
    </button>

    @if ($isOpen)
        <div class="modal">
            <div class="modal-content">
                @if ($modalTitle)
                    <h2>
                        {{ trans($modalTitle) }}
                    </h2>
                @endif

                <button wire:click="closeModal">
                    {{-- TODO: Add x icon --}}
                    {{ trans('Close') }}
                </button>
            </div>
        </div>
    @endif
</div>
