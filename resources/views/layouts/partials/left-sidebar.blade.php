<h2 class="sr-only">
    {{ $subsiteName }} {{  trans('Sidebar') }}
</h2>

@auth
    @include('layouts.sidebars.user-sidebar')
@endauth
