@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    <div class="level profile">
        @include('members.partials.info')
        @include('members.partials.contributions')
        @include('members.partials.social')
    </div>

    @include('members.partials.about')
@endsection
