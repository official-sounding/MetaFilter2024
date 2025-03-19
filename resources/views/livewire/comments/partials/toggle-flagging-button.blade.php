@auth
    <button
        class="button footer-button"
        wire:click.prevent="toggleFlagging()"
        aria-controls="flag-comment-form-{{ $comment->id }}"
        aria-expanded="{{ $this->isFlagging ? 'true' : 'false' }}"
        title="{{ trans($flagButtonText) }}"
        @if ($authorizedUserId === null)
            disabled
        @endif
    >
        <x-icons.icon-component filename="{{ $flagIconFilename }}" />
        {{ $flagCount }}
    </button>
@endauth

@guest
    <button class="button footer-button" disabled>
        <x-icons.icon-component filename="flag" />
        {{ $flagCount }}
    </button>
@endguest
