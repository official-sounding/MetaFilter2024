<button
    type="button"
    title="{{ trans('Favorites') }}"

    @auth
        @if (isset($userFavorited) && $userFavorited === true)
            wire:click="toggleFavorite()"
            {{-- type = submit?--}}
        @endif
    @endauth

    @guest
        disabled="disabled"
    @endguest
    >
        @if ($favorites > 0)
            {{ $favorites }}
        @else
            0
        @endif
</button>
