@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    @guest
        @include('posts.partials.show-not-logged-in', [
            'context' => 'comment'
        ])
    @endguest

    <article class="post post-show">
        <h1>
            {!! $post->title !!}
        </h1>

        <p class="dateline">
            {{ $post->created_at->format('F j, Y g:i a') }}
        </p>

        {!! $post->body !!}

        @if ($post->more_inside)
            {!! $post->more_inside !!}
        @endif
        @include('posts.partials.post-show-footer', [
            'post' => $post,
            'commentsCount' => $post->comments()->count(),
            'favoritesCount' => $post->favorites()->count(),
        ])
    </article>

    <section class="comments" id="comments">
        <livewire:comments.comment-index-component :post="$post" />
    </section>

    @if (isset($relatedPosts))
        @include('posts.partials.related-posts')
    @endif

    @include('posts.partials.previous-next')
@endsection
