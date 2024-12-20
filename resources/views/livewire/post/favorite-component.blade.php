<button
    @guest
        disabled="disabled"
    @endguest
    type="button"
    class="button footer-button"
    wire:click="toggleFavorite()"
    title="Favorites">
    <img src="{{ asset($iconPath) }}"
         class="icon"
         alt="">
    @if ($favorites > 0)
        {{ $favorites }}
    @else
        0
    @endif
</button>
