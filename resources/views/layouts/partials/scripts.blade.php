@if (isset($useLivewire) && $useLivewire === true)
    @livewireScripts
@endif

@if (isset($useWysiwyg) && $useWysiwyg === true)
    @include('layouts.partials.wysiwyg-scripts')
@endif

@vite([
    'resources/js/app.js'
])

@stack('scripts')

<x-impersonate::banner/>
