<section
    class="site-banner collapsible-container @if ($isExpanded === true) is-expanded @endif"
    id="site-banner">
    @if ($bannerLinks)
        <ul class="site-banner-links collapsible-contents">
            @foreach ($bannerLinks as $link)
                <li>
                    <a href="{{ $link['url'] }}">
                        {{ $link['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>

        <button
            wire:click="toggleBanner()"
            aria-expanded="{{ $isExpanded }}"
            aria-controls="site-banner"
            aria-label="Help about username"
            class="button icon">
            <img src="{{ asset("images/icons/$iconFilename.svg") }}" alt="{{ trans($altText) }}">
        </button>
    @else
        @include('notifications.none-listed', [
            'records' => 'banner links'
        ])
    @endif
</section>
