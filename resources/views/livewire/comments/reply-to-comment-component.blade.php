<div x-data="{ selectedText: '' }">
    <button wire:click="toggleForm">
        {{ trans('Reply') }}
    </button>

    <div x-show="$wire.isVisible">
        <textarea wire:model="replyText" placeholder="Write your reply..."></textarea>

        <blockquote class="" x-text="selectedText"></blockquote>

        <div class="level">
            <button type="button" class="button-link">
                {{ trans('Cancel') }}
            </button>

            <button wire:click="submitReply()">
                {{ trans(' Save Reply') }}
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('mouseup', function () {
            let selected = window.getSelection().toString().trim();

            let selectedText = '';

            if (selected) {
                selectedText = selected;
                @this.selectedText = selected;
            }
        });
    </script>
</div>
