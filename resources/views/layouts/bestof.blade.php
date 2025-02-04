<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@include('layouts.partials.window-title')</title>

@include('layouts.partials.styles')

</head>
<body>

<div class="wrapper container">
    <main class="main-contents " id="main-contents">
        @yield('contents')
    </main>
</div>

@include('layouts.partials.scripts')

</body>
</html>
