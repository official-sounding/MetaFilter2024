<footer class="footer site-footer" id="site-footer">
    <div class="container content">
        <h2 class="sr-only">Site Footer</h2>

        <section class="site-links">
            <h3 class="sr-only">Site Links</h3>

            @include('layouts.navigation.footer-subsite-navigation')
            @include('layouts.navigation.footer-member-links-navigation')
            @include('layouts.navigation.footer-links-navigation')
        </section>

        <section>
            <h3 class="sr-only">Search and Contact</h3>

            @include('forms.search.search-form', [
                'formId' => 'site-footer-search-form'
            ])
            @include('layouts.footer.fund-metafilter')
            @include('layouts.footer.contact')
        </section>
    </div>
</footer>
