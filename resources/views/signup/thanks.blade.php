@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    <p>
        You should receive an email shortly with a link to verify your email address.
        If you don&nbsp;t see it, check your spam folder.
        If you still don&nbsp;t see it, <a href="/contact">let us know</a> and we&nbsp;ll help you out.
    </p>
@endsection
