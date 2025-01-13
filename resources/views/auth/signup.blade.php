@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    @livewire('signup-wizard')
@endsection

@section('sidebar')
@endsection
