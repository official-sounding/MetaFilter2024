@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    <h1>{{ $title ?? 'Untitled' }}</h1>

    @forelse ($posts as $post)
        posts
    @empty
        @include('notifications.none-listed', [
            'items' => 'draft posts'
        ])

        <x-buttons.new-post-button />
    @endforelse

@endsection
