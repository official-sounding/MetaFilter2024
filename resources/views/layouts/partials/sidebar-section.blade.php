<section>
    <header>
        <h3 @if (isset($hasAccordion) && $hasAccordion === true) class="has-accordion" @endif>
            {{ $title ?? 'Untitled' }}
        </h3>
    </header>

    @yield('sidebar-contents')
</section>
