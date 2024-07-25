@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    profile show

    @include('profile.partials.subsite-contributions')
@endsection

@section('sidebar')
@endsection
