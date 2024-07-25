@if (isset($useLivewire) && $useLivewire === true)
    @livewireScripts
@endif

@vite([
    'resources/js/app.js'
])

@stack('scripts')
