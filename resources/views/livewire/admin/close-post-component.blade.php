<button
    type="button"
    wire:click="closePost"
    wire:confirm="{{ trans('Are you sure you want to close this post?"') }}">
    {{ trans('Close Post') }}
</button>
