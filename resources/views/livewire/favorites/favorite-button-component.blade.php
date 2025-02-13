<button
    @auth
        wire:click="toggleFavorite()"
    @endauth
    @guest
        disabled="disabled"
    @endguest
    class="button">
    <x-icons.icon-component filename="{{ $iconFilename }}" />
    <span class="icon">
        <img src="{{ asset("images/icons/$iconFilename.svg") }}"
             alt="{{ trans('Favorite icon') }}"
             title="{{ $titleText }}">
    </span>

    {{ $favoritesCount }}
</button>
