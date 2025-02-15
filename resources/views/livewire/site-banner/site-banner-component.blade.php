<section class="site-banner collapsible-container @if ($isExpanded === true) is-expanded @endif">
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

        <button class="button icon" wire:click="toggleBanner()">
            <x-icons.icon-component filename="{{ $iconFilename }}" />
        </button>
    @endif
</section>
