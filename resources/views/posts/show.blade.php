@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    @guest
        @include('posts.partials.show-not-logged-in', [
            'context' => 'comment'
        ])
    @endguest

    <article class="post post-show">
        <h1>{!! $post->title !!}</h1>

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

        <button>
            {{ trans('Edit post') }}
        </button>
    </article>

    <section class="comments" id="comments">
        <x-comments::index :model="$post" />
        {{--
        <livewire:comments.comment-index-component :post="$post" />
        --}}
    </section>

    @include('posts.partials.related-posts')
    @include('posts.partials.previous-next')
@endsection
