<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title') - MetaFilter</title>

<link rel="stylesheet" href="/css/errors.css">

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

</body>
</html>
