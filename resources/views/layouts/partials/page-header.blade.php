@if (!empty(request()->segment(1)))
    <header class="page-header">
        <h1>
            @yield('title', 'Untitled')
        </h1>
    </header>
@endif
