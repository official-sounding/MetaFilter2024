<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{!! $title ?? 'Untitled' !!}</title>

</head>

<body>

@yield('contents')

</body>
</html>
