@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    @livewire('contact-message-form-component')
@endsection
