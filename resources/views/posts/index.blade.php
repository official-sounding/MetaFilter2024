@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    @if (isset($showTitle) && $showTitle === true)
        <h1>{{ $title }}</h1>
    @endif

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
