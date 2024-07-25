@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
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
