@extends('layouts.guest')

@section('title', $title ?? 'Untitled')

@section('contents')
    @livewire('auth.login-component')
@endsection

@section('sidebar')
@endsection
