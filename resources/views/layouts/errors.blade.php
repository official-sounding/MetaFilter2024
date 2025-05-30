<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title') - MetaFilter</title>

<link rel="preconnect" href="https://fonts.bunny.net">
<link rel="stylesheet" href="https://fonts.bunny.net/css?family=merriweather:400,400i">
<link rel="stylesheet" href="https://fonts.bunny.net/css?family=montserrat:400,400i">
<link rel="stylesheet" href="https://fonts.bunny.net/css?family=source-sans-pro:200,200i,300,300i,400,400i,600,600i,700,700i">

<link rel="stylesheet" href="/css/errors.css">

@stack('styles')

</head>

<body>

<main>
    <h1 class="site-title-text">
        <span class="white">
            @yield('code')
        </span>
        <span class="green">
            @yield('title')
        </span>
    </h1>

    <p>@yield('message')</p>
</main>

@stack('scripts')

</body>
</html>
