@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    @auth
        {{-- TODO: Replace with Livewire form --}}
        <livewire:wizards.post-wizard-component />
    @endauth

    @guest
        {{-- TODO: See if guests can see this page based on route restrictions --}}
        @include('posts.partials.show-not-logged-in', [
            'context' => 'index'
        ])
    @endguest
@endsection
