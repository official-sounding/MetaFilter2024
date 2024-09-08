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
        ])

        @if (isset($isArchived) && $isArchived === true)
            @include('posts.partials.show-archived')
        @endif
    </article>

    <livewire:post.post-comments-component :post="$post"/>

    @guest
        @include('posts.partials.show-not-logged-in', [
            'context' => 'comment'
        ])
    @endguest

    @auth
        <livewire:post.post-comment-component :post="$post"/>
    @endauth

    @include('posts.partials.previous-next')
@endsection
