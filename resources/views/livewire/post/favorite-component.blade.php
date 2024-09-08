<button
    @guest
        disabled="disabled"
    @endguest
    type="button"
    wire:click="toggleFavorite()">
    <img src="{{ asset($iconPath) }}"
         class="icon"
         role="img"
         alt="">
    Fave
    @if ($favorites > 0)
        ({{ $favorites }})
    @endif
</button>
