<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@include('layouts.partials.window-title') - {{ $subsiteName }}</title>

    @include('layouts.partials.styles')

</head>
<body class="left-sidebar">

<header class="site-header">
    <div class="container">
        @include('layouts.partials.site-title')
    </div>
</header>

<div class="container main-contents-wrapper">
    <!-- He's the DJ; I'm the wrapper -->
    <x-buttons.top-bottom-button-component location="top" />

    <main class="main-contents" id="main-contents">
        @if (isset($showTitle) && $showTitle === true)
            <h1>{{ $title }}</h1>
        @endif

        @include('layouts.partials.flash-messages')

        @yield('contents')
    </main>

    <aside class="main-sidebar left-sidebar">
        @include('layouts.partials.main-sidebar')
    </aside>

    <x-buttons.top-bottom-button-component location="bottom" />
</div>

<footer class="site-footer" id="site-footer">
    @include('layouts.partials.fine-print')
</footer>

@include('layouts.partials.scripts')

</body>
</html>
