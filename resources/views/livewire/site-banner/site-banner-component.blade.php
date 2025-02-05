<section class="site-banner">
    @if ($bannerLinks)
        <ul class="site-banner-links">
            @foreach ($bannerLinks as $link)
                <li>
                    <a href="{{ $link['url'] }}">
                        {{ $link['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>

        <button class="button icon" wire:click="toggleBanner()">
            <img src="{{ asset("images/icons/$iconFilename.svg") }}" alt="{{ $altText }}">
        </button>
    @endif
</section>
