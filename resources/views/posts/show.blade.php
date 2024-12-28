@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    @guest
        @include('posts.partials.show-not-logged-in', [
            'context' => 'comment'
        ])
    @endguest

    <article class="post post-show">
        @include('posts.partials.post-header')

        {!! $post->body !!}

        @if ($post->more_inside)
            {!! $post->more_inside !!}
        @endif

        @include('posts.partials.post-show-footer', [
            'userId' => $userId,
            'username' => $username,
            'commentsCount' => $post->comments()->count(),
            'favoritesCount' => $post->favorites()->count(),
            'flagsCount' => $post->flags()->count(),
        ])
    </article>

    <livewire:post.post-comments-component :post="$post" :flagReasons="$flagReasons" />

    @if (isset($isArchived) && $isArchived === true)
        @include('posts.partials.show-archived')
    @else
        @auth
            <livewire:post.comment-form-component :post="$post" />
        @endauth
    @endif

    @include('posts.partials.previous-next')
@endsection
