<x-layout.sidebar-section-component
    heading="{{ trans('Today in MeFi History') }}"
    class="years-ago"
    open="true">

    {!! $todayInHistoryNavigation !!}
    {{ trans('years ago') }}
</x-layout.sidebar-section-component>
