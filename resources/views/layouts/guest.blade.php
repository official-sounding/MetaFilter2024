<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-theme="light">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@include('layouts.partials.window-title')</title>

    @include('layouts.partials.styles')

</head>
<body class="guest">

@include('layouts.partials.set-theme')
@include('layouts.partials.skip-navigation')

<header class="site-header">
    @include('layouts.partials.global-header')
    @include('layouts.partials.site-banner')
    @include('layouts.navigation.global-navigation')
    @include('layouts.navigation.primary-navigation')
</header>

<div class="container main-contents-wrapper">
    <main class="main-contents" id="main-contents">
        <h1>{!! $title ?? 'Untitled' !!}</h1>
        @include('layouts.partials.flash-messages')
        @yield('contents')
    </main>
</div>

<footer class="site-footer" id="site-footer">
    @include('layouts.partials.global-footer')
    @include('layouts.partials.fine-print')
</footer>

@include('layouts.partials.scripts')

</body>
</html>
