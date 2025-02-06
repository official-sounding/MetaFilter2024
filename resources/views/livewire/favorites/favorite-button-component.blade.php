<button
    @auth
        wire:click="toggleFavorite()"
    @endauth
    @guest
        disabled="disabled"
    @endguest
    class="button">
    <span class="icon">
        <img src="{{ asset("images/icons/$iconFilename.svg") }}"
             alt="{{ trans('Favorite icon') }}"
             title="{{ $titleText }}">
    </span>

    {{ $favoritesCount }}
</button>
