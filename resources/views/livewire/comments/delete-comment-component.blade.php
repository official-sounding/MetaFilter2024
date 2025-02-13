<button
    type="button"
    class="button delete-button"
    wire:click="deleteComment()"
    wire:confirm="{{ trans('Are you sure you want to delete this comment?') }}">
        <x-icons.icon filename="{{ 'trash3' }}" />
        {{ trans('Delete') }}
</button>
