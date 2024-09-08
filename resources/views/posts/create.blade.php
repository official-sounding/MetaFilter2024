@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    @auth
        @livewire('post.post-form-component')
    @endauth

    @guest
        @include('posts.partials.show-not-logged-in', [
            'context' => 'index'
        ])
    @endguest
@endsection
