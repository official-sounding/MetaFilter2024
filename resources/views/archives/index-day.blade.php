@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    <h1>{{ $title ?? 'Untitled' }}</h1>

    @if (count($posts) > 0)
        @include('posts.partials.list-posts', [
            'posts' => $posts
        ])
    @else
        @include('notifications.none-listed', [
            'items' => 'posts'
        ])
    @endif
@endsection
