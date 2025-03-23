@if (isset($useLivewire) && $useLivewire === true)
    @livewireScripts

    @if (isset($useFilepondScripts) && $useFilepondScripts === true)
        @filepondScripts
    @endif

    @if (isset($useAlerts) && $useAlerts === true)
        <script defer src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>

        <x-livewire-alert::flash />
    @endif
@endif

@vite(['resources/js/app.js'])

@if (isset($useWysiwyg) && $useWysiwyg === true)
    @vite(['resources/js/wysiwyg.js'])
@endif

@stack('scripts')

<x-impersonate::banner/>
