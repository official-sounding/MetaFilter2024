<div class="flag">
    @if ($flagged === true)
        <img src="{{ asset($iconPath) }}"
             class="icon"
             role="img"
             alt="">
        [Flagged]
    @endif

    @if ($flagged === false)
        <button
            type="button"
            class="button footer-button"
            id="flag-dropdown-toggle"
            @guest
                disabled="disabled"
            @endguest
            @auth
                title="{{ $title }}"
                aria-controls="flag-form"
                aria-haspopup="menu"
                aria-label="menu button"
                aria-expanded="false"
                wire:click="toggleFlagForm()"
            @endauth
        >
            <img
                src="{{ asset($iconPath) }}"
                class="icon"
                role="img"
                alt="">
        </button>
    @endif
</div>
