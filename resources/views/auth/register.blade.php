@extends('layouts.guest')

@section('title', $title ?? 'Untitled')

@section('contents')
    @livewire('register-wizard')
@endsection

@section('sidebar')
@endsection
