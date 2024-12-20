<section class="help-fund-mefi">
    <h2 class="sr-only">{{ __('Help Fund MetaFilter') }}</h2>

    <a href="{{ session('fundingIndexRoute') }}" class="button primary-button">
        {{ __('Help fund MeFi!') }}
    </a>

    {!! $fundMeFiContents ?? '' !!}
</section>
