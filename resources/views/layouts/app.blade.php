<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-theme="light">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@include('layouts.partials.window-title') - {{ $subsiteName }}</title>

    @include('layouts.partials.styles')
    @include('layouts.partials.social-media-meta-tags')
    @include('layouts.partials.previous-next-meta')
    @include('layouts.partials.favicons')
    @if (isset($canonicalUrl))
        <link rel="canonical" href="{{ $canonicalUrl }}">
    @endif

    @if (isset($useWysiwyg) && $useWysiwyg === true)
        <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    @endif

</head>
<body>

@include('layouts.partials.set-theme')
@include('layouts.partials.skip-navigation')

<header class="site-header">
    @include('layouts.partials.global-header')
    @include('layouts.partials.site-banner')
    @include('layouts.navigation.global-navigation')
    @include('layouts.navigation.primary-navigation')
</header>

@if (isset($showSecondaryNavigation) && $showSecondaryNavigation === true)
    @include('layouts.navigation.secondary-navigation')
@endif

<div class="container main-contents-wrapper">
    <!-- He's the DJ; I'm the wrapper -->

    <main class="main-contents" id="main-contents">
        @include('layouts.partials.flash-messages')
        @yield('contents')
    </main>

    <aside class="main-sidebar">
        @include('layouts.partials.main-sidebar')
    </aside>
</div>

<footer class="site-footer" id="site-footer">
    @include('layouts.partials.global-footer')
    @include('layouts.partials.fine-print')
</footer>

@include('layouts.partials.scripts')

</body>
</html>
