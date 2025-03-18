<button
    class="button footer-button"
    type="button"
    title="{{ $titleText }}"
    @auth
        @if (isset($userBookmarked) && $userBookmarked === true)
            wire:click="removeBookmark()"
        @else
            wire:click="addBookmark()"
       @endif
    @endauth
>
    <x-icons.icon-component filename="{{ $iconFilename }}" />
</button>
