<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Untitled' }}</title>

    @include('layouts.partials.styles')

</head>
<body class="guest">

@include('layouts.partials.skip-navigation')

@include('layouts.partials.site-header')

<div class="wrapper container">
    <main class="main-contents " id="main-contents">
        @include('layouts.partials.flash-messages')
        @yield('contents')
    </main>
</div>

@include('layouts.partials.scripts')

@include('layouts.partials.fine-print')
@include('layouts.partials.scripts')

</body>
</html>
