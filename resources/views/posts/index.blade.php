@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    @if ($subdomain ==='fanfare')
        <x-snippets.snippet-component slug="fanfare-spoilers-note" small-text=true />
    @endif

    @if (isset($showTitle) && $showTitle === true)
        <h1>{{ $title }}</h1>
    @endif

    @auth
        <x-buttons.new-post-button />
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
            'records' => 'posts'
        ])
    @endif

    {{--
    <button class="danger-button">
        <span class="icon">
            <img src="{{ asset('images/icons/exclamation-triangle-fill.svg') }}" alt="">
        </span>
        {{ trans('Do not click this button.') }}
    </button>
    --}}
@endsection
