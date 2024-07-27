<link rel="preconnect" href="https://fonts.bunny.net">
<link rel="stylesheet" href="https://fonts.bunny.net/css?family=montserrat:400">
<link rel="stylesheet" href="https://fonts.bunny.net/css?source-sans-pro:300,300i,400,400i,600,600i,700,700i">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.1/css/bulma.min.css">

@if (isset($useLivewire) && $useLivewire === true)
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @livewireStyles
@endif

@vite($stylesheets)

@stack('styles')
