<section>
    <details @if (isset($isOpen) && $isOpen === true) open @endif>
        <summary>
            <h3>{{ $title ?? trans('Untitled') }}</h3>
        </summary>

        @yield('sidebar-contents')
    </details>
</section>
