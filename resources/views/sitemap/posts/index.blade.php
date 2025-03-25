<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($alphas as $alpha)
        <sitemap>
            <loc>{{ route('sitemap.posts', $alpha) }}</loc>
        </sitemap>
    @endforeach
</sitemapindex>
