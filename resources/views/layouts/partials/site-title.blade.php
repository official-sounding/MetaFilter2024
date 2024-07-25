<a href="{{ route($subsite['route']) }}" title="Home page">
    <hgroup class="site-title">
        <h1 class="site-title-text">
            <span class="white">{{ $subsite['whiteText'] }}</span><span class="green">{{ $subsite['greenText'] }}</span>
        </h1>
        @if ($subsite['tagline'] !== '')
            <p class="tagline">{{ $subsite['tagline'] }}</p>
        @endif
    </hgroup>
</a>
