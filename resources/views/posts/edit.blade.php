@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    <livewire:post-post-component />
@endsection
