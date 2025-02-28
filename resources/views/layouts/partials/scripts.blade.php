@if (isset($useLivewire) && $useLivewire === true)
    @livewireScripts

    @if (isset($useFilepondScripts) && $useFilepondScripts === true)
        @filepondScripts
    @endif

    @if (isset($useAlerts) && $useAlerts === true)
        <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>

        <x-livewire-alert::flash />
    @endif
@endif

@vite([
    'resources/js/app.js'
])

@stack('scripts')

<x-impersonate::banner/>
