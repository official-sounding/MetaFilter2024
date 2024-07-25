@extends('layouts.guest')

@section('title', $title ?? 'Untitled')

@section('contents')
    @livewire('auth.register-form-component')
@endsection

@section('sidebar')
@endsection
