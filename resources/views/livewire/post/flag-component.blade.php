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
            @guest
                disabled="disabled"
            @endguest
            @auth
                title="{{ $title }}"
                @if ($type === 'comment')
                    @click="$dispatch('toggle-flag-comment-form')"
                @endif
                @if ($type === 'post')
                    @click="$dispatch('toggle-flag-post-form')"
                @endif
            @endauth
        >
            <img
                src="{{ asset($iconPath) }}"
                class="icon"
                role="img"
                alt="">
            @if ($flags > 0)
                {{ __('Flags') }} ({{ $flags }})
            @else
                {{ __('Flags') }} (0)
            @endif
        </button>
    @endif
</div>
