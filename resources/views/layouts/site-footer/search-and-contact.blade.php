<section>
    <h3 class="sr-only">Search and Contact</h3>

    @include('forms.search.search-form', [
        'formId' => 'site-footer-search-form'
    ])
    @include('layouts.site-footer.fund-metafilter')
    @include('layouts.site-footer.contact')
</section>
