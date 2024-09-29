@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    <article class="post">
        @include('posts.partials.post-header')

        {!! $post->body !!}

        @if ($post->more_inside)
            {!! $post->more_inside !!}
        @endif

        @include('posts.partials.post-footer', [
            'userId' => $userId,
            'username' => $username,
            'commentsCount' => $post->comments()->count(),
            'favoritesCount' => $post->favorites()->count(),
            'flagsCount' => $post->flags()->count(),
            'showFlags' => true
        ])

        @if (isset($isArchived) && $isArchived === true)
            @include('posts.partials.show-archived')
        @endif
    </article>

    <livewire:post.post-comments-component :post="$post" :flagReasons="$flagReasons" />

    @auth
        <livewire:post.comment-form-component :post="$post" />
    @endauth

    @guest
        @include('posts.partials.show-not-logged-in', [
            'context' => 'comment'
        ])
    @endguest

    @include('posts.partials.previous-next')
@endsection
