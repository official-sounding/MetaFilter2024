<div>
    <button wire:click="openModal">
        Open Modal
    </button>

    @if ($isOpen)
        <div class="modal">
            <div class="modal-content">
                <h2>Your Modal Title</h2>

                <button wire:click="closeModal">
                    Close Modal
                </button>
            </div>
        </div>
    @endif
</div>
