<div class="notification is-info">
    <button popovertarget="{{ $popoverId }}" popovertargetaction="toggle">
        {{ trans($buttonText) }}
    </button>

    <div id="{{ $popoverId }}" popover>
        @if (!is_null($routeName))
            @include ('components.popovers.partials.show-info-icon')

            <a href="{{ route($routeName) }}">
                {{ trans($popoverText) }}
            </a>
        @else
            @include ('components.popovers.partials.show-info-icon')

            {{ trans($popoverText) }}
        @endif
    </div>
</div>
