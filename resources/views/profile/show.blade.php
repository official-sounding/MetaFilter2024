@extends('layouts.guest')

@section('title', $title ?? 'Untitled')

@section('contents')
    <div class="level profile">
        @include('profile.partials.info')
        @include('profile.partials.contributions')
        @include('profile.partials.social')
    </div>

    @include('profile.partials.about')
@endsection
