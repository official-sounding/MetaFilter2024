@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    @auth
        post job
    @endauth

    @guest
        @include('posts.partials.show-not-logged-in', [
            'context' => 'index'
        ])
    @endguest
@endsection
