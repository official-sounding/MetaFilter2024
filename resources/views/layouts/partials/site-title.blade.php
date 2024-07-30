<a href="{{ route($subsite['route']) }}" class="navbar-item" title="Home page">
    <hgroup class="site-title">
        @if (isset($subsite['whiteText']) && isset($subsite['greenText']))
            @if (empty(request()->segment(1)))
                <h1 class="site-title-text">
                    <span class="white">{{ $subsite['whiteText'] }}</span><span class="green">{{ $subsite['greenText'] }}</span>
                </h1>
            @else
                <p class="site-title-text">
                    <span class="white">{{ $subsite['whiteText'] }}</span><span class="green">{{ $subsite['greenText'] }}</span>
                </p>
            @endif
        @endif

        @if (isset($subsite['tagline']))
            <p class="tagline">{{ $subsite['tagline'] }}</p>
        @endif
    </hgroup>
</a>
