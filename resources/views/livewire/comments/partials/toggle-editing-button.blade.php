<button
    class="button footer-button"
    wire:click.prevent="toggleEditing()"
    aria-controls="edit-comment-form-{{ $comment->id }}"
    aria-expanded="{{ $this->isEditing ? 'true' : 'false' }}">
    <x-icons.icon-component filename="pencil-square" />
    {{ trans('Edit') }}
</button>
