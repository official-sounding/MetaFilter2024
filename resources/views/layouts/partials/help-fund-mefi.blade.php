<section class="help-fund-mefi">
    <h3 class="sr-only">{{ trans('Help Fund MetaFilter') }}</h3>

    <a href="{{ route($fundingIndexRoute) }}" class="button primary-button">
        {{ trans('Help fund MeFi!') }}
    </a>

    {!! $snippets->whereStrict('slug', '=', 'help-fund-mefi') !!}
</section>
