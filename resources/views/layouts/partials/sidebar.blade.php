<h2 class="sr-only">
    {{ $subsiteName }} Sidebar
</h2>

@auth()
    @include('layouts.navigation.partials.create-post-button')
@endauth

@if (isset($primarySidebarNavigation))
    {!! $primarySidebarNavigation !!}
@endif
