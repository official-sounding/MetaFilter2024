@if (isset($useLivewire) && $useLivewire === true)
    @if (isset($useFilepondScripts) && $useFilepondScripts === true)
        @filepondScripts
    @endif

    @livewireScripts
@endif

@vite([
    'resources/js/app.js'
])

@stack('scripts')

<x-impersonate::banner/>
