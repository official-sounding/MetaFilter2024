<button
    @guest
        disabled="disabled"
    @endguest
    type="button"
    class="button footer-button"
    wire:click="toggleFavorite()">
    <img src="{{ asset($iconPath) }}"
         class="icon"
         role="img"
         alt="">
    @if ($favorites > 0)
        Favorites ({{ $favorites }})
    @else
        Favorites (0)
    @endif
</button>
