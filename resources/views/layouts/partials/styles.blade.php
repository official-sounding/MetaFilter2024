<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=montserrat:400|source-sans-pro:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

<style>
    [x-cloak] {
        display: none !important;
    }
</style>

@vite($stylesheets)

@if (isset($useLivewire) && $useLivewire === true)
    @livewireStyles
@endif

@stack('styles')
