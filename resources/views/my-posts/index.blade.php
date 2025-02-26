@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    <h1>{{ $title ?? 'Untitled' }}</h1>

    @forelse ($posts as $post)
        @if ($loop->first)
            <ul>
        @endif
            <li>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </li>
        @if ($loop->last)
            </ul>
        @endif
    @empty
        @include('notifications.none-listed', [
            'records' => 'draft posts'
        ])
    @endforelse

    <x-buttons.new-post-button />
@endsection
