<nav class="global-navigation navbar" id="global-navigation" aria-label="Global navigation">
    <div class="container flex-container">
        {!! $globalNavigation ?? 'Global navigation unavailable' !!}
{{--
        @include('forms.search.search-form', [
            'class' => 'global-navigation-search-form',
            'id' => 'global-navigation-search-form'
        ])
--}}
    </div>
</nav>
