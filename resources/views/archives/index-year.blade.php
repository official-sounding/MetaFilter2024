@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    <h1>{{ $title ?? 'Untitled' }}</h1>

@endsection
