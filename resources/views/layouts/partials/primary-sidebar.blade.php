<h2>
    {{ $subsiteName }}
</h2>

@auth()
    @include('layouts.navigation.partials.create-post-button')
@endauth

@if (isset($primarySidebarNavigation))
    {!! $primarySidebarNavigation !!}
@endif
