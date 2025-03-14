@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    @guest
        @include('posts.partials.show-not-logged-in', [
            'context' => 'comment'
        ])
    @endguest

    <article class="post post-show">
        <header>
            <h1>
                {!! $post->title !!}
            </h1>

            <p class="dateline">
                <time
                    datetime="{{ $post->created_at->format('Y-m-d H:i:d') }}">
                    {{ $post->created_at->format('g:i a') }}
                </time>

                {{ $post->created_at->format('F j, Y g:i a') }}

                <x-posts.post-rss-button :post="$post" />
            </p>
        </header>

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
