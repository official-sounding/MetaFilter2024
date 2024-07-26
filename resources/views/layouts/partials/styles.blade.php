<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=montserrat:400|source-sans-pro:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

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
