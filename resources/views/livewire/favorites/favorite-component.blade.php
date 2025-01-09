<button
    @guest
        disabled="disabled"
    @endguest
    type="button"
    wire:click="toggleFavorite()"
    title="{{ trans('Favorites') }}">
    @if ($favorites > 0)
        {{ $favorites }}
    @else
        0
    @endif
</button>
