@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    @if ($subdomain ==='fanfare')
        <x-snippet-component slug="fanfare-spoilers-note" small-text=true />
    @endif

    @if (isset($showTitle) && $showTitle === true)
        <h1>{{ $title }}</h1>
    @endif

    @auth
        <x-new-post-button />
    @endauth

    @guest
        @include('posts.partials.show-not-logged-in', [
            'context' => 'index'
        ])
    @endguest

    @if (count($datePosts) > 0)
        @include('posts.partials.list-posts-by-date', [
            'dayPosts' => $datePosts
        ])
    @else
        @include('notifications.none-listed', [
            'items' => 'posts'
        ])
    @endif
@endsection
