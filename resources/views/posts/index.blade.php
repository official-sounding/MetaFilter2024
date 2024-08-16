@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    @guest
        @include('posts.partials.show-not-logged-in', [
            'context' => 'index'
        ])
    @endguest

    @if (count($posts) > 0)
        @include('posts.partials.index-list', [
            'posts' => $posts
        ])
    @else
        @include('notifications.none-listed', [
            'items' => 'posts'
        ])
    @endif
@endsection

@section('sidebar')
    {{--
        @includeIf($sidebarView)
    --}}
@endsection
