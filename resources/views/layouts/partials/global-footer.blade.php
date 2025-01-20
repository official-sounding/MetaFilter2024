<section class="global-footer">
    <div class="container">
        <h2 class="sr-only">
            {{ trans('Site Footer') }}
        </h2>

        @include('layouts.site-footer.footer-subsite-navigation')
        @include('layouts.site-footer.footer-links-navigation')
        @include('layouts.site-footer.search-and-contact')
    </div>
</section>
