<button
    @if (isset($userFavorited) && $userFavorited === true)
        wire:click="toggleFavorite()"
        title="{{ $titleText }}"
        type="submit"
    @else
        type="button"
        title="{{ trans('Favorites') }}"
        disabled="disabled"
    @endif
    >
    {{ $favoriteCount }}
</button>
