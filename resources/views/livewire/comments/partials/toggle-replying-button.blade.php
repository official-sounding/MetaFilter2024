<button
    class="button footer-button"
    wire:click.prevent="toggleReplying()"
    aria-controls="comment-reply-form-{{ $comment->id }}"
    aria-expanded="{{ $this->isReplying ? 'true' : 'false' }}">
    <x-icons.icon-component filename="reply-fill" />
    {{ trans('reply') }}
</button>
