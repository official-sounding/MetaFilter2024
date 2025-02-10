<button
    type="button"
    class="button delete-button"
    wire:click="deleteComment()"
    wire:confirm="{{ trans('Are you sure you want to delete this comment?') }}">
        <span class="icon">
            <img src="{{ asset('images/icons/trash3.svg') }}" alt="">
        </span>
    {{ trans('Delete') }}
</button>
