@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    @auth
        <livewire:posts.post-form-component />
    @endauth

    @guest
        {{-- TODO: See if guests can see this page based on route restrictions --}}
        @include('posts.partials.show-not-logged-in', [
            'context' => 'index'
        ])
    @endguest
@endsection
