<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-theme="light">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@include('layouts.partials.window-title') - {{ $subsiteName }}</title>

@include('layouts.partials.styles')
@include('layouts.partials.social-media-meta-tags')
@include('layouts.partials.sidebars.previous-next-meta')
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

<header class="global-header">
    @include('layouts.partials.site-header')
    @include('layouts.partials.site-banner')
</header>

<header class="subsite-header">
    @include('layouts.navigation.subsite-navigation')
    {{-- TODO: Add the search form here --}}
</header>

<div class="container wrapper">
    <!-- He's the DJ; I'm the wrapper -->
    <main class="main-contents" id="main-contents">
        @include('layouts.partials.flash-messages')
        @yield('contents')
    </main>

    <aside class="sidebar">
        @include('layouts.partials.sidebar')
    </aside>

    <aside class="sidebar secondary-sidebar">
        @include('layouts.partials.secondary-sidebar')
    </aside>
</div>

@include('layouts.partials.site-footer')
@include('layouts.partials.scripts')

</body>
</html>
