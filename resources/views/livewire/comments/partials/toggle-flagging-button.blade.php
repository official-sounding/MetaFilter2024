@auth
    <button
        class="button footer-button"
        wire:click.prevent="toggleFlagging()"
        aria-controls="flag-comment-form-{{ $comment->id }}"
        aria-expanded="{{ $this->isFlagging ? 'true' : 'false' }}"
        @if ($authorizedUserId === null)
            disabled
        @endif
    >
        <x-icons.icon-component filename="{{ $flagIconFilename }}" />
        {{ trans($flagButtonText) }}
    </button>
@endauth

@guest
    <button class="button footer-button" disabled>
        <x-icons.icon-component filename="flag" />
        {{ $flagCount }}
    </button>
@endguest
