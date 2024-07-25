@extends('layouts.guest')

@section('title', $title ?? 'Untitled')

@section('contents')
    @livewire('auth.login-form-component')
@endsection

@section('sidebar')
@endsection
