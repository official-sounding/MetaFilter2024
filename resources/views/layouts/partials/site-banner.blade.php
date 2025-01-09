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
    @endif
</section>
