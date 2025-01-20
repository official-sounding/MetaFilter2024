<a href="{{ route($subsite['route']) }}" title="Home page">
    <hgroup class="site-title">
        @if (empty(request()->segment(1)))
            <h1 class="site-title-text">
                <span class="white">{{ $whiteText }}</span>
                <span class="green">{{ $greenText }}</span>
            </h1>
        @else
            <p class="site-title-text">
                <span class="white">{{ $whiteText }}</span>
                <span class="green">{{ $greenText }}</span>
            </p>
        @endif

        @if (isset($tagline))
            <p class="tagline">{{ $tagline }}</p>
        @endif
    </hgroup>
</a>
