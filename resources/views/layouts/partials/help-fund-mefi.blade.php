<section class="help-fund-mefi">
    <h3 class="sr-only">{{ __('Help Fund MetaFilter') }}</h3>

    <a href="{{ $fundingIndexRoute }}" class="button primary-button">
        {{ __('Help fund MeFi!') }}
    </a>

    {!! $snippets->whereStrict('slug', '=', 'help-fund-mefi') !!}
</section>
