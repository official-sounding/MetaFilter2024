<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

<style>
    *, :after, :before {
        box-sizing: border-box;
    }
</style>
</head>

<body>

<main>
    <h1>@yield('code')</h1>

    <p>@yield('message')</p>
</main>

</body>
</html>
