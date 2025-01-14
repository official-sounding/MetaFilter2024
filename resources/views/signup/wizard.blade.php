@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    @livewire('signup.signup-wizard-component')
@endsection
