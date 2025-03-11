<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="color-scheme" content="light dark">

<title>@include('layouts.partials.window-title') - {{ $subsiteName }}</title>

@include('layouts.partials.styles')
@include('layouts.partials.social-media-meta-tags')
@include('layouts.partials.favicons')

@if (isset($canonicalUrl))
    <link rel="canonical" href="{{ $canonicalUrl }}">
@endif

@if (isset($useWysiwyg) && $useWysiwyg === true)
    <script defer src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
@endif

</head>
<body class="left-sidebar">

<header class="site-header" id="site-header">
    @include('layouts.partials.global-header')
    <livewire:site-banner.site-banner-component/>
    @include('layouts.navigation.global-navigation')
</header>

<header class="subsite-header">
    @include('layouts.navigation.primary-navigation')
    @if (isset($showSecondaryNavigation) && $showSecondaryNavigation === true)
        @include('layouts.navigation.secondary-navigation')
    @endif
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
        @include('layouts.partials.my-mefi-sidebar')
    </aside>

    <x-buttons.top-bottom-button-component location="bottom" />
</div>

<footer class="site-footer" id="site-footer">
    @include('layouts.partials.fine-print')
</footer>

@include('layouts.partials.scripts')

</body>
</html>
