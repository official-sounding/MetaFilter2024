<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{!! $title ?? 'Untitled' !!}</title>

<style>
    {{ file_get_contents(public_path('bui')) }}
</style>

</head>
<body>

@yield('contents')

</body>
</html>
