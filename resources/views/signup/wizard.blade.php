@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    <livewire:wizards.signup-wizard-component />
@endsection
