@extends('layouts.guest')

@section('title', $title ?? 'Untitled')

@section('contents')
    registered user controller
    @livewire('register-wizard')
@endsection

@section('sidebar')
@endsection
