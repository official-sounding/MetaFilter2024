@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    <p>
        You should receive an email shortly with a link to verify your email address.
        If you don&rsquo;t see it, check your spam folder.
        If you still don&rsquo;t see it, <a href="/contact">let us know</a> and we&rsquo;ll help you out.
    </p>

    <p><a href="{{ route($metaFilterPostIndexRoute) }}">Go to the home page</a> to create a new post or comment on other posts.</p>
@endsection
