@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    @guest
        @include('posts.partials.show-not-logged-in', [
            'context' => 'index'
        ])
    @endguest

    @if (count($datePosts) > 0)
        @include('posts.partials.index-list', [
            'dayPosts' => $datePosts
        ])
    @else
        @include('notifications.none-listed', [
            'items' => 'posts'
        ])
    @endif
@endsection
