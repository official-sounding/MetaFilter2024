<div class="flag">
    @if ($flagged === true)
        <span class="icon">
            <img src="{{ asset($iconPath) }}" alt="">
        </span>
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
            <span class="icon">
                <img src="{{ asset($iconPath) }}" alt="">
            </span>

            @if ($flags > 1)
                {{ trans('Flags') }} ({{ $flags }})
            @elseif ($flags === 1)
                {{ trans('Flags') }} (1)
            @else
                {{ trans('Flags') }} (0)
            @endif
        </button>
    @endif
</div>
