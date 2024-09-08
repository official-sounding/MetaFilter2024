@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    {!! $page->contents !!}
@endsection
