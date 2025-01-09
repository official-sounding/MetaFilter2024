@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    <h1>{{ $title }}</h1>

    {!! $page->body !!}
@endsection
