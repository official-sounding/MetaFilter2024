<footer class="footer site-footer" id="site-footer">
    <section class="container">
        <h2 class="sr-only">Site Footer</h2>

        <div class="columns">
            <h3 class="sr-only">Site Links</h3>

            @include('layouts.site-footer.footer-subsite-navigation')
            @include('layouts.site-footer.footer-member-links-navigation')
            @include('layouts.site-footer.footer-links-navigation')
        </div>

        <div class="content has-text-centered">
            <small>
                <b>&copy; 1999&ndash;{{ now()->year }} MetaFilter LLC.</b> <br class="responsive-br">
                All posts copyright their original authors.
            </small>
        </div>
    </section>
</footer>
