@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    @includeFirst([
        "signup.partials.intro-en",
        'signup.partials.intro-en'
    ])
@endsection
