@if (isset($useLivewire) && $useLivewire === true)
    @if (isset($useComments) && $useComments === true)
        @commentsScripts
    @endif

    @livewireScripts
@endif

@vite([
    'resources/js/app.js'
])

@stack('scripts')

<x-impersonate::banner/>
