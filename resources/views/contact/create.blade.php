@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    @livewire('contact.contact-message-component')
@endsection
