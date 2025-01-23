@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    <livewire:wizards.signup.signup-wizard-component />
@endsection
