<x-layout.sidebar-section-component
    heading="{{ trans('Today in MeFi History') }}"
    class="years-ago"
    open="true">

    <nav class="today-in-history-navigation" aria-label="Today in MetaFilter history navigation">
        <ul class="today-in-history-navigation-menu">
            {!! $links !!}
        </ul>
    </nav>

    {{ trans('years ago') }}
</x-layout.sidebar-section-component>
