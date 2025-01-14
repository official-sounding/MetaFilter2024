@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    @includeFirst([
        "signup.partials.intro-$appLocale",
        'signup.partials.intro-en'
    ])
@endsection
