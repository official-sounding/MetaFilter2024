@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    @auth
        <livewire:wizards.post-wizard-component />
    @endauth

    @guest
        @include('posts.partials.show-not-logged-in', [
            'context' => 'index'
        ])
    @endguest
@endsection
