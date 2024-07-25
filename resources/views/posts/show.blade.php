@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    <article>
        @include('posts.partials.show-header')

        {!! $post->body !!}

        @if ($post->more_inside)
            {!! $post->more_inside !!}
        @endif

        @guest
            @include('posts.partials.show-not-logged-in')
        @endguest

        @if (isset($isArchived ) && $isArchived === true)
            @include('posts.partials.show-archived')
        @endif

        @include('posts.partials.show-footer')
    </article>

    <livewire:post-comments-component :post="$post" />

    @auth
        <livewire:post-comment-form-component :post="$post" />
    @endauth

    @include('posts.partials.next-previous')
@endsection
